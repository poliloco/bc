<?php
use yii\helpers\Url;
use app\models\Avisos;
$avisos = Avisos::find()->where("condicion='Activo'")->orderBy(['fecha'=>SORT_DESC])->all();


/* @var $this yii\web\View */
$this->title = 'BuenCondominio';

$invitado=Yii::$app->user->isGuest;
if ($invitado) 
  {
    $visible=0;
    $vivienda='';
    $nombre='';
    $tipo='';
    $encabezado='BuenCondominio';
  } 
else 
  {
    $visible=1;
    $vivienda=Yii::$app->user->identity->propiedad;
    $nombre=Yii::$app->user->identity->username;
    $tipo=Yii::$app->user->identity->tipo;
    $encabezado='Bienvenido: '.$nombre.', '.$vivienda.', '.$tipo;
}

?>
<div class="site-index">

<?php
$ruta=Url::base(true).'/index.php';
$boton1='btn btn-success btn-block';

if ($tipo=='Administrador')
{
  //echo $tipo;
?>
<div class="body-content">
  <div class="row" align="center">
    <h3>Atajos</h3>
    <div class="col-lg-4">
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=facturas/index" ?>>Facturas Proveedor</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=recibo-cobro/index" ?>>Recibo Condominio</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=banco-movimiento/index-cheque" ?>>Cheques</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=banco-movimiento/index-deposito" ?>>Depositos</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=propiedad/index" ?>>Propiedades</a></p>
    </div>
    <div class="col-lg-4">
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=proveedores/index" ?>>Proveedores</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=instalaciones/index" ?>>Instalaciones</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=activos/index" ?>>Activos</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=diario/index" ?>>Diario</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=periodo/index" ?>>Periodos</a></p>
    </div>
    <div class="col-lg-4">
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=catalogo/index" ?>>Catalogo</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=recibo-cobro/cxc" ?>>Cuentas por Cobrar</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=recibo-cobro/balance" ?>>Balance</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=recibo-cobro/flujo" ?>>Flujo de Caja</a></p>
    </div>
    <div class="col-lg-4">
    </div>
  </div>
</div>
<?php
}
else
{
}
////////////
if ($tipo=='Condominio')
{
?>
<div class="body-content">
  <div class="row" align="center">
    <h3>Atajos</h3>
    <div class="col-lg-4">
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=avisos/index" ?>>Avisos</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=comentarios/index" ?>>Comentarios</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=banco-movimiento/index2" ?>>Movimientos Banco</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=recibo-cobro/index2" ?>>Recibo Condominio</a></p>
    </div>
    <div class="col-lg-4">
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=facturas/index2" ?>>Facturas</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=proveedores/index2" ?>>Proveedores</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=banco/index2" ?>>Banco</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=instalaciones/index2" ?>>Instalaciones</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=reservacion/index" ?>>Reservacion</a></p>
    </div>
    <div class="col-lg-4">
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=proyectos/index" ?>>Proyectos</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=votacion/index" ?>>Votacion</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=familia/index" ?>>Familia</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=propiedad/index2" ?>>Propiedad</a></p>
    </div>
  </div>
</div>
<?php
}
else
{
}
////////////
if ($tipo=='Residente')
{
?>
<div class="body-content">
  <div class="row" align="center">
    <h3>Atajos</h3>
    <div class="col-lg-4">
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=avisos/index2" ?>>Avisos</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=comentarios/index2" ?>>Comentarios</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=recibo-cobro/index3" ?>>Recibo Condominio</a></p>
    </div>
    <div class="col-lg-4">
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=facturas/index2" ?>>Facturas</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=proveedores/index2" ?>>Proveedores</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=reservacion/index2" ?>>Reservacion</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=proyectos/index2" ?>>Proyectos</a></p>
    </div>
    <div class="col-lg-4">
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=votacion/index2" ?>>Votacion</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=banco-movimiento/index2" ?>>Movimiento banco</a></p>
    </div>
  </div>
</div>

<table width="95%" class="table table-striped">
  <tr>
    <td colspan="6" align="center"><h4>AVISOS</h4></td>
  </tr>
  <tr>
    <td width="20%">Titulo</td>
    <td width="60%">Contenido</td>
    <td width="20%">Fecha</td>
  </tr>
<?php
$html='';
if(!empty($avisos)){
  foreach($avisos as $aviso){
    $html.='<tr>
             <td>'.$aviso['titulo'].'</td>
             <td>'.$aviso['contenido'].'</td>
             <td>'.$aviso['fecha'].'</td>
            </tr>';
  }
} 
echo $html;
?>
</table>

<?php

}
else
{
}
////////////
if ($tipo=='Configuracion')
{
?>
<div class="body-content">
  <div class="row" align="center">
    <h3>Atajos</h3>
    <div class="col-lg-4">
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=proveedores/index" ?>>Proveedores</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=activos/index" ?>>Activos</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=banco/index" ?>>Banco</a></p>
    </div>
    <div class="col-lg-4">
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=user/index" ?>>Usuarios</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=familia/index" ?>>Familia</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=propiedad/index" ?>>Propiedades</a></p>
    </div>
    <div class="col-lg-4">
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=periodo/index" ?>>Periodos</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=catalogo/index" ?>>Catalogo</a></p>
      <p><a class="<?php echo $boton1 ?>" <?php echo "href=".$ruta."?r=organizacion/index" ?>>Organizacion</a></p>
    </div>
    <div class="col-lg-4">
    </div>
  </div>
</div>
<?php
}
else
{
}
////
if ($tipo=='')
{
?>
    <div class="jumbotron">
        <h1>Buen Condominio</h1>
        <h2>Su Condominio al dia...</h2>

        <!--<p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <!--<h2>Documentacion</h2>

                <p>Documentacion del Sitio.</p>-->

                <!--<p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>-->
            </div>
            <div class="col-lg-4">
                <!--<h2>Foro</h2>

                <p>Foro del Sitio.</p>-->

                <!--<p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>-->
            </div>
            <div class="col-lg-4">
                <!--<h2>Extenciones</h2>

                <p>Extenciones del Sitio.</p>-->

                <!--<p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>-->
            </div>
        </div>

    </div>

<?php
}
else
{
}

?>

</div>


