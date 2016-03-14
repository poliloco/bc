<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ReciboCobroDet */

$this->title = 'Actualizar Recibo Cobro Det: ' . ' ' . $model->id_recibo_cobro_det;
$this->params['breadcrumbs'][] = ['label' => 'Recibo Cobro Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_recibo_cobro_det, 'url' => ['view', 'id' => $model->id_recibo_cobro_det]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="recibo-cobro-det-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
