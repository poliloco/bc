<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$nombre=Yii::$app->user->identity->username;

/* @var $this yii\web\View */
/* @var $model app\models\Instalaciones */

$this->title = $model->id_instalaciones;
if ($nombre=='Administrador') {
  $this->params['breadcrumbs'][] = ['label' => 'Instalaciones', 'url' => ['index']];
  }
  else{
  $this->params['breadcrumbs'][] = ['label' => 'Instalaciones', 'url' => ['index2']];
  }
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instalaciones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<?php
if ($nombre=='Administrador') { ?>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_instalaciones], ['class' => 'btn btn-primary']) ?>
        <!--<?= Html::a('Borrar', ['delete', 'id' => $model->id_instalaciones], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta Seguro que quiere borrar este item?',
                'method' => 'post',
            ],
        ]) ?>-->
<?php }
else
{}?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_instalaciones',
            'codigo',
            'descripcion',
            'capacidad',
            'detalles:ntext',
            'alquiler',
            'cuenta_contable',
            'condicion',
        ],
    ]) ?>

</div>
