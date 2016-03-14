<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReciboCobroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Balance';
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
<table width="100%" align="center" border="0">
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
$html.='<h3>Balance al '.$fecha.'</h3>
<h4>Activos<h4>
Disponibles
<table width="90%" align="center" border="0">
  <tr>
    <td>Cuenta</td>
    <td>Descripcion</td>
    <td>Saldo</td>
  </tr>';
$disponibles=0;
$connection = \Yii::$app->db;
$saldos=$connection->createCommand('SELECT c.cuenta_contable, c.descripcion, sum(d.debe) debe, sum(d.haber) haber, sum(d.debe)-sum(d.haber) saldo  FROM catalogo c LEFT JOIN diario_det d
                 ON (d.cuenta=c.cuenta_contable)
                 where c.cuenta_contable like "1.01.01%" 
group by c.cuenta_contable, c.descripcion')->queryAll();

if(!empty($saldos)){
  foreach($saldos as $saldo){
    $html.='
            <tr>
              <td width="20%">'.$saldo['cuenta_contable'].'</td>
              <td width="60%">'.$saldo['descripcion'].'</td>
              <td width="20%">'.$saldo['saldo'].'</td>
            </tr>';
  $disponibles+=$saldo['saldo'];
  }
  $html.='<tr><td></td><td align="right">TOTAL</td><td align="right">'.$disponibles.'</td></tr>';
}
else
{}
$html.='</table>'; 
$html.='
Exigibles
<table width="90%" align="center" border="0">';
$exigibles='0';
$connection = \Yii::$app->db;
$saldos=$connection->createCommand('SELECT c.cuenta_contable, c.descripcion, sum(d.debe) debe, sum(d.haber) haber, sum(d.debe)-sum(d.haber) saldo  FROM catalogo c LEFT JOIN diario_det d
                 ON (d.cuenta=c.cuenta_contable)
                 where c.cuenta_contable like "1.01.02%" 
group by c.cuenta_contable, c.descripcion')->queryAll();

if(!empty($saldos)){
  foreach($saldos as $saldo){
    $html.='
            <tr>
              <td width="20%">'.$saldo['cuenta_contable'].'</td>
              <td width="60%">'.$saldo['descripcion'].'</td>
              <td width="20%">'.$saldo['saldo'].'</td>
            </tr>';
    $exigibles+=$saldo['saldo'];
  }
  $html.='<tr><td></td><td align="right">TOTAL</td><td align="right">'.$exigibles.'</td></tr>';
}
else
{}
$html.='</table>'; 
$html.='
No Circulante
<table width="90%" align="center" border="0">';
$nocirculante='0';
$connection = \Yii::$app->db;
$saldos=$connection->createCommand('SELECT c.cuenta_contable, c.descripcion, sum(d.debe) debe, sum(d.haber) haber, sum(d.debe)-sum(d.haber) saldo  FROM catalogo c LEFT JOIN diario_det d
                 ON (d.cuenta=c.cuenta_contable)
                 where c.cuenta_contable like "1.02%" 
group by c.cuenta_contable, c.descripcion')->queryAll();

if(!empty($saldos)){
  foreach($saldos as $saldo){
    $html.='
            <tr>
              <td width="20%">'.$saldo['cuenta_contable'].'</td>
              <td width="60%">'.$saldo['descripcion'].'</td>
              <td width="20%">'.$saldo['saldo'].'</td>
            </tr>';
    $nocirculante+=$saldo['saldo'];
  }
  $html.='<tr><td></td><td align="right">TOTAL</td><td align="right">'.$nocirculante.'</td></tr>';
}
else
{}
$html.='</table>'; 
$total=$disponibles+$exigibles+$nocirculante;
$html.='
<h3>TOTAL ACTIVOS<h3>
<table width="90%" align="center" border="0">
  <tr>
    <td width="20%"></td>
    <td width="60%" align="right">TOTAL</td>
    <td width="20%" align="right">'.$total.'</td>
  </tr>
</table>';

$html.='
<h4>Pasivos</h4>
Circulante
<table width="90%" align="center" border="0">';
$pcirculante=0;
$connection = \Yii::$app->db;
$saldos=$connection->createCommand('SELECT c.cuenta_contable, c.descripcion, sum(d.debe) debe, sum(d.haber) haber, sum(d.debe)-sum(d.haber) saldo  FROM catalogo c LEFT JOIN diario_det d
                 ON (d.cuenta=c.cuenta_contable)
                 where c.cuenta_contable like "2.01%" 
group by c.cuenta_contable, c.descripcion')->queryAll();

if(!empty($saldos)){
  foreach($saldos as $saldo){
    $html.='
            <tr>
              <td width="20%">'.$saldo['cuenta_contable'].'</td>
              <td width="60%">'.$saldo['descripcion'].'</td>
              <td width="20%">'.$saldo['saldo'].'</td>
            </tr>';
  $pcirculante+=$saldo['saldo'];
  }
  $html.='<tr><td></td><td align="right">TOTAL</td><td align="right">'.$pcirculante.'</td></tr>';
}
else
{}
$html.='</table>'; 

$html.='
No Circulante
<table width="90%" align="center" border="0">';
$pnocirculante=0;
$connection = \Yii::$app->db;
$saldos=$connection->createCommand('SELECT c.cuenta_contable, c.descripcion, sum(d.debe) debe, sum(d.haber) haber, sum(d.debe)-sum(d.haber) saldo  FROM catalogo c LEFT JOIN diario_det d
                 ON (d.cuenta=c.cuenta_contable)
                 where c.cuenta_contable like "2.02%" 
group by c.cuenta_contable, c.descripcion')->queryAll();

if(!empty($saldos)){
  foreach($saldos as $saldo){
    $html.='
            <tr>
              <td width="20%">'.$saldo['cuenta_contable'].'</td>
              <td width="60%">'.$saldo['descripcion'].'</td>
              <td width="20%">'.$saldo['saldo'].'</td>
            </tr>';
  $pnocirculante+=$saldo['saldo'];
  }
  $html.='<tr><td></td><td align="right">TOTAL</td><td align="right">'.$pnocirculante.'</td></tr>';
}
else
{}
$html.='</table>'; 

$total=$pcirculante+$pnocirculante;
$html.='
<h3>TOTAL PASIVOS<h3>
<table width="90%" align="center" border="0">
  <tr>
    <td width="20%"></td>
    <td width="60%" align="right">TOTAL</td>
    <td width="20%" align="right">'.$total.'</td>
  </tr>
</table>';


$html.='
<h4>Ingresos</h4>
<table width="90%" align="center" border="0">';
$ingresos=0;
$connection = \Yii::$app->db;
$saldos=$connection->createCommand('SELECT c.cuenta_contable, c.descripcion, sum(d.debe) debe, sum(d.haber) haber, sum(d.debe)-sum(d.haber) saldo  FROM catalogo c LEFT JOIN diario_det d
                 ON (d.cuenta=c.cuenta_contable)
                 where c.cuenta_contable like "3.%" 
group by c.cuenta_contable, c.descripcion')->queryAll();

if(!empty($saldos)){
  foreach($saldos as $saldo){
    $html.='
            <tr>
              <td width="20%">'.$saldo['cuenta_contable'].'</td>
              <td width="60%">'.$saldo['descripcion'].'</td>
              <td width="20%">'.$saldo['saldo'].'</td>
            </tr>';
  $ingresos+=$saldo['saldo'];
  }
  $html.='<tr><td></td><td align="right">TOTAL</td><td align="right">'.$ingresos.'</td></tr>';
}
else
{}
$html.='</table>'; 

$html.='
<h4>Egresos</h4>
<table width="90%" align="center" border="0">';
$egresos=0;
$connection = \Yii::$app->db;
$saldos=$connection->createCommand('SELECT c.cuenta_contable, c.descripcion, sum(d.debe) debe, sum(d.haber) haber, sum(d.debe)-sum(d.haber) saldo  FROM catalogo c LEFT JOIN diario_det d
                 ON (d.cuenta=c.cuenta_contable)
                 where c.cuenta_contable like "4.%" 
group by c.cuenta_contable, c.descripcion')->queryAll();

if(!empty($saldos)){
  foreach($saldos as $saldo){
    $html.='
            <tr>
              <td width="20%">'.$saldo['cuenta_contable'].'</td>
              <td width="60%">'.$saldo['descripcion'].'</td>
              <td width="20%">'.$saldo['saldo'].'</td>
            </tr>';
  $egresos+=$saldo['saldo'];
  }
  $html.='<tr><td></td><td align="right">TOTAL</td><td align="right">'.$egresos.'</td></tr>';
}
else
{}
$html.='</table>'; 

      
/*      '<td>Propiedad</td>';
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
      $html.='</table>'; */

echo $html;

include('../mPDF/mpdf.php');
$mpdf=new mPDF('c','Letter');
//$mpdf->setHeader();	// Clear headers before adding page
//$mpdf->AddPage('L');

$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($html);
//$mpdf->WriteHTML($html2);
//$mpdf->WriteHTML($html2);
//$mpdf->WriteHTML($html);
//$mpdf->WriteHTML($html1);
$archivo='balance.pdf';
$mpdf->Output($archivo,'D');
exit;

?>




</div>
