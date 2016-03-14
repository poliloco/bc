<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DiarioDet */

$this->title = $model->id_diario_det;
$this->params['breadcrumbs'][] = ['label' => 'Diario Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diario-det-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_diario_det], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id_diario_det], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta Seguro que quiere borrar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_diario_det',
            'id_diario',
            'cuenta',
            'debe',
            'haber',
        ],
    ]) ?>

</div>
