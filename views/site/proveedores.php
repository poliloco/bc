<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedores */
/* @var $form ActiveForm */
?>
<div class="site-proveedores">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'rif') ?>
        <?= $form->field($model, 'nombre') ?>
        <?= $form->field($model, 'direccion') ?>
        <?= $form->field($model, 'cuenta_contable') ?>
        <?= $form->field($model, 'telefono') ?>
        <?= $form->field($model, 'correo') ?>
        <?= $form->field($model, 'condicion') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-proveedores -->
