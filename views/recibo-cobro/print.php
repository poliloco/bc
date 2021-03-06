<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use app\models\ReciboCobroDet;
$recibocobrodet=ReciboCobroDet::find()->where(['id_recibo_cobro'=>$model->id_recibo_cobro])->all();

use app\models\Organizacion;
$organizacion=Organizacion::find()->one();


/* @var $tdis yii\web\View */
/* @var $model app\models\ReciboCobro */

?>
<div class="recibo-cobro-view">


<?php
$fecha=date("d/m/Y");
$html='
<table width="90%" align="center" border="0">
  <tr align="center">
    <td width="25%" align="center"><IMG SRC="imagen/LogoBCp.png" WIDTH=127 HEIGHT=75 ALT="Logo"></td>
    <td width="50%" align="center"><h4 align="center">'.$organizacion->razon_social.'</h4>
                    <h5 align="center">'.$organizacion->direccion.'</h5>
                    <h6 align="center">'.$organizacion->rif.'</h6></td>
    <td width="25%" align="center"><IMG SRC="imagen/'.$organizacion->logo.'" WIDTH=127 HEIGHT=75 ALT="Logo"></td>
  </tr>
  <tr>
    <td colspan="3" align="center">
	<h4 align="center">RECIBO DE CONDOMINIO No.'.$model->id_recibo_cobro.'</h4>
	<h5 align="right">Fecha Registro: '.$model->fecha_registro.'</h5>
	<h5 align="right">Fecha Impresion: '.$fecha.'</h5>    
    </td>
  </tr>
</table>
<table width="90%" align="center" border="1">
  <tr>
    <th width="30%">Cedula: '.$model->cedula_responsable.'</th>
    <th width="30%">Nombre: '.$model->nombre_responsable.'</th>
    <th width="30%">Vivienda: '.$model->propiedad.'</th>
  </tr>
  <tr>
    <th>Periodo: '.$model->periodo.'</th>
    <th>Alicuota: '.$model->alicuota.'</th>
    <th>Monto: '.$model->monto.'</th>
  </tr>
  <tr>
    <td>Condicion: '.$model->condicion.'</td>
    <td>Abono: '.$model->abono.'</td>
    <td>Fecha: '.$model->fecha_pago.'</td>
  </tr>
  <tr>
    <td colspan="3" align="center">.</td>
  </tr>
</table>';


$html.='
<table width="90%" align="center" border="1">
  <tr>
    <th width="50%">Conceptos</th>
    <th width="20%">Proveedor</th>
    <th width="15%">Factura</th>
    <th width="15%">Monto</th>
  </tr>';
if (!empty($recibocobrodet)){
    foreach($recibocobrodet as $detalle){
    $html.='<tr>
             <td>'.$detalle['concepto'].'</td>
             <td>'.$detalle['proveedor'].'</td>
             <td align="center">'.$detalle['factura'].'</td>
             <td align="center">'.$detalle['monto'].'</td>
            </tr>';
    }
}
$html.='
</table>
<p></br></p>
<p></br></p>
<p></br></p>
<p></br></p>
<table width="90%" align="center">
  <tr>
    <td width="50%" align="center">Administrador</td>
    <td width="50%" align="center">Propietario</td>
  </tr>
</table>'
;


$html2='<p><hr /></p>';
//$html2.='<p></br></p>';


//echo $html;
//echo $html2;

include('../mPDF/mpdf.php');
$mpdf=new mPDF('c','Letter');
//$mpdf->setHeader();	// Clear headers before adding page
//$mpdf->AddPage('L');
$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($html);
$mpdf->WriteHTML($html2);
//$mpdf->WriteHTML($html2);
//$mpdf->WriteHTML($html);
//$mpdf->WriteHTML($html1);
$archivo='recibo'.$model->periodo.$model->propiedad.'.pdf';
$mpdf->Output($archivo,'D');
exit;

?>

</div>
