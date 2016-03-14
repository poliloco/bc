<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReciboCobro */
/* @var $form ActiveForm */
?>
<div class="site-recibocobro">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'periodo') ?>
        <?= $form->field($model, 'propiedad') ?>
        <?= $form->field($model, 'alicuota') ?>
        <?= $form->field($model, 'cedula_responsable') ?>
        <?= $form->field($model, 'nombre_responsable') ?>
        <?= $form->field($model, 'monto') ?>
        <?= $form->field($model, 'fecha_registro') ?>
        <?= $form->field($model, 'fecha_pago') ?>
        <?= $form->field($model, 'fecha_acreditacion') ?>
        <?= $form->field($model, 'condicion') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-recibocobro -->
