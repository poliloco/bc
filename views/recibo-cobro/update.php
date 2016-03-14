<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ReciboCobro */

$this->title = 'Actualizar Recibo Condominio: ' . ' ' . $model->id_recibo_cobro;
$this->params['breadcrumbs'][] = ['label' => 'Recibo Condominio', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_recibo_cobro, 'url' => ['view', 'id' => $model->id_recibo_cobro]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="recibo-cobro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
