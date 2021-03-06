<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
$invitado=Yii::$app->user->isGuest;
if ($invitado) 
  {
    $visible=0;
    $vivienda='';
    $nombre='';
    $tipo='';
    $foto='';
    $encabezado='BuenCondominio';
  } 
else 
  {
    $visible=1;
    $vivienda=Yii::$app->user->identity->propiedad;
    $nombre=Yii::$app->user->identity->username;
    $familia=Yii::$app->user->identity->familia;
    $tipo=Yii::$app->user->identity->tipo;
    $foto=Yii::$app->user->identity->foto;
    //$hoy = date("Y-m-d H:i:s");
    $hoy = date("d-m-Y");
    $encabezado=$hoy.', Bienvenido: '.$nombre.', '.$vivienda.', '.$tipo;
}
            NavBar::begin([
//                'brandLabel' => 'BuenCondominio',
                'brandLabel' => $encabezado,
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
if ($tipo=='Administrador')
{
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Inicio', 'url' => ['/site/index']],
                    ['label' => 'Actividades', 'url' => ['/site/index'], 'visible' => $visible, 'items' =>[
                      ['label' => 'Facturas', 'url' => ['/facturas/index', 'tag' => 'Facturas']],
                      ['label' => 'Recibo Condominio', 'url' => ['/recibo-cobro/index', 'tag' => 'Recibo Condominio']],
                      ['label' => 'Cheque', 'url' => ['/banco-movimiento/index-cheque', 'tag' => 'Cheque']],
                      ['label' => 'Deposito', 'url' => ['/banco-movimiento/index-deposito', 'tag' => 'Deposito']],
                      ['label' => 'Diario', 'url' => ['/diario/index', 'tag' => 'Diario']],
]],
                    ['label' => 'Reportes', 'url' => ['/site/index'], 'visible' => $visible, 'items' =>[
                      ['label' => 'Cuentas por Cobrar', 'url' => ['/recibo-cobro/cxc', 'tag' => 'Cxc']],
                      ['label' => 'Flujo de Caja Total', 'url' => ['/recibo-cobro/flujo', 'tag' => 'Flujo']],
]],
                    ['label' => 'Configuracion', 'url' => ['/site/index'], 'visible' => $visible, 'items' =>[
                      ['label' => 'Activos', 'url' => ['/activos/index', 'tag' => 'Activos']],
                      ['label' => 'Banco', 'url' => ['/banco/index', 'tag' => 'Banco']],
                      ['label' => 'Catalogo', 'url' => ['/catalogo/index', 'tag' => 'Catalogo']],
                      ['label' => 'Instalaciones', 'url' => ['/instalaciones/index', 'tag' => 'Instalaciones']],
                      ['label' => 'Periodo', 'url' => ['/periodo/index', 'tag' => 'Periodo']],
                      ['label' => 'Proveedores', 'url' => ['/proveedores/index', 'tag' => 'Proveedores']],
]],
//                    ['label' => 'Home', 'url' => ['/site/index']],
//                    ['label' => 'About', 'url' => ['/site/about']],
//                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
}
else
{
}
////////////
if ($tipo=='Auditor')
{
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Inicio', 'url' => ['/site/index']],
                    ['label' => 'Configuracion', 'url' => ['/site/index'], 'visible' => $visible, 'items' =>[
                      ['label' => 'Auditoria', 'url' => ['/auditoria/index', 'tag' => 'Auditoria']],
]],
//                    ['label' => 'Home', 'url' => ['/site/index']],
//                    ['label' => 'About', 'url' => ['/site/about']],
//                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
}
else
{
}
////////////
if ($tipo=='Condominio')
{
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Inicio', 'url' => ['/site/index']],
                    ['label' => 'Actividades', 'url' => ['/site/index'], 'visible' => $visible, 'items' =>[
                      ['label' => 'Avisos', 'url' => ['/avisos/index', 'tag' => 'Avisos']],
                      ['label' => 'Comentarios', 'url' => ['/comentarios/index', 'tag' => 'Comentarios']],
                      ['label' => 'Banco Movimiento', 'url' => ['/banco-movimiento/index2', 'tag' => 'Movimiento Banco']],
                      ['label' => 'Recibo Cobro', 'url' => ['/recibo-cobro/index2', 'tag' => 'Recibo Condominio']],
                      ['label' => 'Facturas', 'url' => ['/facturas/index2', 'tag' => 'Facturas']],
                      ['label' => 'Proveedores', 'url' => ['/proveedores/index2', 'tag' => 'Proveedores']],
                      ['label' => 'Banco', 'url' => ['/banco/index2', 'tag' => 'Banco']],
]],
                    ['label' => 'Configuracion', 'url' => ['/site/index'], 'visible' => $visible, 'items' =>[
                      ['label' => 'Instalaciones', 'url' => ['/instalaciones/index2', 'tag' => 'Instalaciones']],
                      ['label' => 'Reservacion', 'url' => ['/reservacion/index', 'tag' => 'Reservacion']],
                      ['label' => 'Proyectos', 'url' => ['/proyectos/index', 'tag' => 'Proyectos']],
                      ['label' => 'Votacion', 'url' => ['/votacion/index', 'tag' => 'Votacion']],
                      ['label' => 'Familia', 'url' => ['/familia/index', 'tag' => 'Familia']],
                      ['label' => 'Propiedad', 'url' => ['/propiedad/index2', 'tag' => 'Propiedad']],
]],
//                    ['label' => 'Home', 'url' => ['/site/index']],
//                    ['label' => 'About', 'url' => ['/site/about']],
//                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
}
else
{
}
////////////
if ($tipo=='Configuracion')
{
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Inicio', 'url' => ['/site/index']],
                    ['label' => 'Configuracion Base', 'url' => ['/site/index'], 'visible' => $visible, 'items' =>[
                      ['label' => 'Proveedores', 'url' => ['/proveedores/index', 'tag' => 'Proveedores']],
                      ['label' => 'Activos', 'url' => ['/activos/index', 'tag' => 'Activos']],
                      ['label' => 'Banco', 'url' => ['/banco/index', 'tag' => 'Banco']],
                      ['label' => 'Usuarios', 'url' => ['/user/index', 'tag' => 'Usuarios']],
                      ['label' => 'Familia', 'url' => ['/familia/index', 'tag' => 'Familia']],
                      ['label' => 'Propiedad', 'url' => ['/propiedad/index', 'tag' => 'Propiedad']],
                      ['label' => 'Organizacion', 'url' => ['/organizacion/index', 'tag' => 'Organizacion']],
]],
                    ['label' => 'Configuracion Contable', 'url' => ['/site/index'], 'visible' => $visible, 'items' =>[
                      ['label' => 'Periodo', 'url' => ['/periodo/index', 'tag' => 'Periodo']],
                      ['label' => 'Catalogo', 'url' => ['/catalogo/index', 'tag' => 'Catalogo']],
]],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']]:
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
}
else
{
}
////////////
if ($tipo=='Residente')
{
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Inicio', 'url' => ['/site/index']],
                    ['label' => 'Actividades', 'url' => ['/site/index'], 'visible' => $visible, 'items' =>[
                      ['label' => 'Avisos', 'url' => ['/avisos/index2', 'tag' => 'Avisos']],
                      ['label' => 'Comentarios', 'url' => ['/comentarios/index2', 'tag' => 'Comentarios']],
                      ['label' => 'Recibo Condominio', 'url' => ['/recibo-cobro/index3', 'tag' => 'Recibo Condominio']],
                      ['label' => 'Facturas', 'url' => ['/facturas/index2', 'tag' => 'Facturas']],
                      ['label' => 'Proveedores', 'url' => ['/proveedores/index2', 'tag' => 'Proveedores']],
                      ['label' => 'Propiedad', 'url' => ['/propiedad/index2', 'tag' => 'Propiedad']],
                      ['label' => 'Reservacion', 'url' => ['/reservacion/index2', 'tag' => 'Reservacion']],
                      ['label' => 'Proyectos', 'url' => ['/proyectos/index2', 'tag' => 'Proyectos']],
                      ['label' => 'Votacion', 'url' => ['/votacion/index2', 'tag' => 'Votacion']],
                      ['label' => 'Banco Movimiento', 'url' => ['/banco-movimiento/index2', 'tag' => 'Movimiento Banco']],
]],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']]:
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
}
else
{
}

////
if ($tipo=='')
{
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    //['label' => 'Inicio', 'url' => ['/site/index']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']]:
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
}
else
{

}

            NavBar::end();
        ?>

        <div class="container">
<?php
use app\models\Organizacion;
$organizacion=Organizacion::find()->one();

?>
<table  width="100%">
  <tr align="center">
    <td width="25%"><IMG SRC="imagen/LogoBCp.png" WIDTH=170 HEIGHT=100 ALT='Logo'></td>
    <td width="50%"><h2><?php echo $organizacion->razon_social; ?></h2>
                    <h4><?php echo $organizacion->direccion; ?></h4>
                    <h6><?php echo $organizacion->rif; ?></h6></td>
    <td width="25%"><IMG SRC="imagen/<?php echo $organizacion->logo; ?>" WIDTH=170 HEIGHT=100 ALT='Logo'></td>
  </tr>
</table>



            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; Cacaotec <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
