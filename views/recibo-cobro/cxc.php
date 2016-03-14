<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReciboCobroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cuentas por Cobrar';
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

use app\models\ReciboCobro;
$recibos=ReciboCobro::find()->select('periodo')->groupBy('periodo')->all();

$html='
<table width="90%" align="center" border="0">
  <tr align="center">
    <td width="25%" align="center"><IMG SRC="imagen/LogoBCp.png" WIDTH=127 HEIGHT=75 ALT="Logo"></td>
    <td width="50%" align="center"><h4 align="center">'.$organizacion->razon_social.'</h4>
                    <h5 align="center">'.$organizacion->direccion.'</h5>
                    <h6 align="center">'.$organizacion->rif.'</h6></td>
    <td width="25%" align="center"><IMG SRC="imagen/'.$organizacion->logo.'" WIDTH=127 HEIGHT=75 ALT="Logo"></td>
  </tr>
</table>
<h3>Cuentas por Cobrar</h3>';
$fecha=date("d/m/Y");
$html.='Estado de cuenta al: '.$fecha.'
<table width="100%" align="center" border="1">
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
                $saldo=$monto['monto']-$monto['abono'];
                     $html.='<td>'.$saldo.'</td>';
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
$archivo='cuentasporcobrar.pdf';
$mpdf->Output($archivo,'D');
exit;

?>




</div>
