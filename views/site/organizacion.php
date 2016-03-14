<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Organizacion */
/* @var $form ActiveForm */
?>
<div class="site-organizacion">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'razon_social') ?>
        <?= $form->field($model, 'rif') ?>
        <?= $form->field($model, 'estado') ?>
        <?= $form->field($model, 'municipio') ?>
        <?= $form->field($model, 'parroquia') ?>
        <?= $form->field($model, 'direccion') ?>
        <?= $form->field($model, 'correo') ?>
        <?= $form->field($model, 'logo') ?>
        <?= $form->field($model, 'telefono') ?>
        <?= $form->field($model, 'sector') ?>
        <?= $form->field($model, 'condicion') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-organizacion -->
