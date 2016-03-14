<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$tipo=Yii::$app->user->identity->tipo;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedores */

$this->title = $model->id_proveedor;
if ($tipo=='Administrador' or $tipo=='Configuracion')
{
$this->params['breadcrumbs'][] = ['label' => 'Proveedores', 'url' => ['index']];
}
else
{
$this->params['breadcrumbs'][] = ['label' => 'Proveedores', 'url' => ['index2']];
}
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proveedores-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<?php
if ($tipo=='Administrador'  or $tipo=='Configuracion')
{
?>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_proveedor], ['class' => 'btn btn-primary']) ?>
<?php
}
else
{}
?>
        <!--<?= Html::a('Borrar', ['delete', 'id' => $model->id_proveedor], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta Seguro que quiere borrar este item?',
                'method' => 'post',
            ],
        ]) ?>-->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_proveedor',
            'rif',
            'nombre',
            'direccion',
            'telefono',
            'correo',
            'cuenta_contable',
            'cuenta_egresos',
            'condicion',
        ],
    ]) ?>

</div>
