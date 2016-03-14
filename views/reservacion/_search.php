<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReservacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_reservacion') ?>

    <?= $form->field($model, 'instalacion') ?>

    <?= $form->field($model, 'fecha_reserva') ?>

    <?= $form->field($model, 'familia') ?>

    <?= $form->field($model, 'motivo') ?>

    <?php // echo $form->field($model, 'responsable_reserva') ?>

    <?php // echo $form->field($model, 'fecha_registro') ?>

    <?php // echo $form->field($model, 'aprobado') ?>

    <?php // echo $form->field($model, 'fecha_aprobacion') ?>

    <?php // echo $form->field($model, 'responsable_aprobacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
