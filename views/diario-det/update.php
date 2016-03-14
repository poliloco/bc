<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DiarioDet */

$this->title = 'Actualizar Diario Det: ' . ' ' . $model->id_diario_det;
$this->params['breadcrumbs'][] = ['label' => 'Diario Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_diario_det, 'url' => ['view', 'id' => $model->id_diario_det]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="diario-det-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
