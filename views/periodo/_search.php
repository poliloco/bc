<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PeriodoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="periodo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_periodo') ?>

    <?= $form->field($model, 'anio') ?>

    <?= $form->field($model, 'mes') ?>

    <?= $form->field($model, 'aniomes') ?>

    <?= $form->field($model, 'condicion') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
