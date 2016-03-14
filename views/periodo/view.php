<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Periodo */

$this->title = $model->id_periodo;
$this->params['breadcrumbs'][] = ['label' => 'Periodos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="periodo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p><?php if ($model->condicion=='Cerrado') {} else { ?>
      <div style="float: left">
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_periodo], ['class' => 'btn btn-primary']) ?>
        <!--<?= Html::a('Borrar', ['delete', 'id' => $model->id_periodo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta Seguro que quiere borrar este item?',
                'method' => 'post',
            ],
        ]) ?>-->
      </div>
      <div style="float: right">
        <?= Html::a('Cerrar Periodo', ['cerrar', 'id' => $model->id_periodo], ['class' => 'btn btn-warning']) ?>
      </div>
    <?php } ?>
    </p>
    <br>
    <br>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_periodo',
            'anio',
            'mes',
            'aniomes',
            'condicion',
        ],
    ]) ?>

</div>
