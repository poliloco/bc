<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReciboCobroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Flujo de Caja Totales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recibo-cobro-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!--<?= Html::a('Crear Recibo Condominio Especial', ['create'], ['class' => 'btn btn-success']) ?>-->
    </p>

<?php
use app\models\Organizacion;
$organizacion=Organizacion::find()->one();

$html='
<table width="90%" align="center" border="0">
  <tr align="center">
    <td width="25%" align="center"><IMG SRC="imagen/LogoBCp.png" WIDTH=127 HEIGHT=75 ALT="Logo"></td>
    <td width="50%" align="center"><h4 align="center">'.$organizacion->razon_social.'</h4>
                    <h5 align="center">'.$organizacion->direccion.'</h5>
                    <h6 align="center">'.$organizacion->rif.'</h6></td>
    <td width="25%" align="center"><IMG SRC="imagen/'.$organizacion->logo.'" WIDTH=127 HEIGHT=75 ALT="Logo"></td>
  </tr>
</table>';
$fecha=date("d/m/Y");
//$html.='Estado de cuenta al: '.$fecha;

$html.='<h4>Totales al '.$fecha.'</h4>
<table width="90%" align="center" border="1">
  <tr>
    <td>Tipo</td>';
$connection = \Yii::$app->db;
use app\models\BancoMovimiento;
$ingresos=BancoMovimiento::find()->select('periodo')->where(['tipo' => 'Deposito', 'condicion' => 'Emitido'])->orWhere(['tipo' => 'Transferencia', 'condicion' => 'Emitido'])->groupBy('periodo')->all();
if(!empty($ingresos)){
  foreach($ingresos as $ingreso){
      $html.='<td>'.$ingreso['periodo'].'</td>';
    }
  $html.='</tr>
          <tr>
            <td>Ingresos</td>';
  $entrada=0;
  foreach($ingresos as $ingreso){
      $monto=$connection->createCommand('select sum(abono) from banco_movimiento where tipo<>"Cheque" and condicion="Emitido" and periodo="'.$ingreso['periodo'].'"')->queryScalar();
      $entrada=$entrada+$monto;
      $html.='<td>'.$monto.'</td>';
    }
  $html.='</tr>
          <tr>
            <td>Egresos</td>';
  $salida=0;
  foreach($ingresos as $ingreso){
      $monto=$connection->createCommand('select sum(cargo) from banco_movimiento where tipo="Cheque" and condicion<>"Anulado" and periodo="'.$ingreso['periodo'].'"')->queryScalar();
      $salida=$salida+$monto;
      $html.='<td>'.$monto.'</td>';
    }
  $html.='</tr>';
}
else
{}
$html.='</table>';
//select * from banco_movimiento where tipo<>'Cheque' and condicion='Emitido'
/*
use app\models\ReciboCobro;
$recibos=ReciboCobro::find()->select('periodo')->groupBy('periodo')->all();

$html.='<table width="100%" align="center" border="1">
       <tr>
       <td>Propiedad</td>';
if(!empty($recibos)){
  foreach($recibos as $recibo){
        $html.='<td>'.$recibo['periodo'].'</td>';
    }
  $html.='</tr>';
  
  $datos=ReciboCobro::find()->select('propiedad, nombre_responsable')->groupBy('propiedad')->orderBy('propiedad')->all();
  if(!empty($datos)){
    foreach($datos as $dato){
          $html.='<tr><td>'.$dato['propiedad'].'</td>';
          foreach($recibos as $recibo){
             $montos=ReciboCobro::find()->select('monto, abono')
                                        ->where(['propiedad' => $dato['propiedad'], 'periodo' => $recibo['periodo']])->all();
             if(!empty($montos)){
                foreach($montos as $monto){
                     $html.='<td>'.$monto['monto'].'</td>';
                } 
             }
             else
             {}
           }
      }
      $html.='</tr>';
  }
  else
  {}
}
else
{}
      $html.='</table>';

$fecha=date("d/m/Y");
$html.='Estado de cuenta al: '.$fecha;
*/
echo $html;


include('../mPDF/mpdf.php');
$mpdf=new mPDF('c','Letter');
//$mpdf->setHeader();	// Clear headers before adding page
$mpdf->AddPage('L');

$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($html);
//$mpdf->WriteHTML($html2);
//$mpdf->WriteHTML($html2);
//$mpdf->WriteHTML($html);
//$mpdf->WriteHTML($html1);
$archivo='flujodecajatotal.pdf';
$mpdf->Output($archivo,'D');
exit;

?>




</div>
