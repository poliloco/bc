<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reservacion */
/* @var $form ActiveForm */
?>
<div class="site-reservacion">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'instalacion') ?>
        <?= $form->field($model, 'fecha_reserva') ?>
        <?= $form->field($model, 'familia') ?>
        <?= $form->field($model, 'fecha_registro') ?>
        <?= $form->field($model, 'fecha_aprobacion') ?>
        <?= $form->field($model, 'motivo') ?>
        <?= $form->field($model, 'responsable_reserva') ?>
        <?= $form->field($model, 'responsable_aprobacion') ?>
        <?= $form->field($model, 'aprobado') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-reservacion -->
