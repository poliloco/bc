<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$nombre=Yii::$app->user->identity->username;

/* @var $this yii\web\View */
/* @var $model app\models\Banco */

$this->title = $model->id_banco;
  if($nombre=='Administrador'){
$this->params['breadcrumbs'][] = ['label' => 'Bancos', 'url' => ['index']];
  }
  else{
$this->params['breadcrumbs'][] = ['label' => 'Bancos', 'url' => ['index2']];
  }
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banco-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<?php
  if($nombre=='Administrador'){ ?>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_banco], ['class' => 'btn btn-primary']) ?>
        <!--<?= Html::a('Borrar', ['delete', 'id' => $model->id_banco], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta Seguro que quiere borrar este item?',
                'method' => 'post',
            ],
        ]) ?>-->
<?php  }
  else {} ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_banco',
            'banco',
            'cuenta_banco',
            'nombre',
            'fecha_apertura',
            'fecha_cierre',
            'saldo',
            'cuenta_contable',
            'condicion',
        ],
    ]) ?>

</div>
