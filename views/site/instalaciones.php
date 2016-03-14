<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Instalaciones */
/* @var $form ActiveForm */
?>
<div class="site-instalaciones">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'codigo') ?>
        <?= $form->field($model, 'descripcion') ?>
        <?= $form->field($model, 'capacidad') ?>
        <?= $form->field($model, 'alquiler') ?>
        <?= $form->field($model, 'cuenta_contable') ?>
        <?= $form->field($model, 'detalles') ?>
        <?= $form->field($model, 'condicion') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-instalaciones -->
