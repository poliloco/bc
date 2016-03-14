<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Facturas */
/* @var $form ActiveForm */
?>
<div class="site-facturas">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'numero') ?>
        <?= $form->field($model, 'control') ?>
        <?= $form->field($model, 'periodo') ?>
        <?= $form->field($model, 'fecha') ?>
        <?= $form->field($model, 'proveedor') ?>
        <?= $form->field($model, 'concepto') ?>
        <?= $form->field($model, 'monto') ?>
        <?= $form->field($model, 'fecha_registro') ?>
        <?= $form->field($model, 'fecha_modificacion') ?>
        <?= $form->field($model, 'condicion') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-facturas -->
