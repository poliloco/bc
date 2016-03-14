<?php

use yii\helpers\Html;
use yii\grid\GridView;

use app\models\Organizacion;
$organizacion=Organizacion::find()->one();

use app\models\Propiedad;
$propiedades=Propiedad::find()->all();

/* @var $this yii\web\View */
/* @var $searchModel app\models\PropiedadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Propiedad';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propiedad-index">

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
	<h4 align="center">Listado de Propiedades</h4>
	<h5 align="center">Fecha Impresion: '.$fecha.'</h5>    
    </td>
  </tr>
</table>';
$html.='
<table width="90%" align="center" border="1">
  <tr align="center">
    <td>Propiedad</td>
    <td>Cedula</td>
    <td>Nombre</td>
    <td>Telefono</td>
    <td>Correo</td>
    <td>Condicion</td>
  </tr>
';

if(!empty($propiedades)){
  foreach($propiedades as $propiedad){
      $html.='<tr>
                <td>'.$propiedad['propiedad'].'</td>
                <td>'.$propiedad['cedula_responsable'].'</td>
                <td>'.$propiedad['nombre_responsable'].'</td>
                <td>'.$propiedad['telefono_responsable'].'</td>
                <td>'.$propiedad['correo_responsable'].'</td>
                <td>'.$propiedad['condicion'].'</td>
             </tr>';
    }
}
else
{}
$html.='</table>';

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
$archivo='listadopropietarios.pdf';
$mpdf->Output($archivo,'D');
exit;

?>


</div>
