<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Familia */
/* @var $form ActiveForm */
?>
<div class="site-familia">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'familia') ?>
        <?= $form->field($model, 'propiedad') ?>
        <?= $form->field($model, 'jefe_familia') ?>
        <?= $form->field($model, 'tenencia_propiedad') ?>
        <?= $form->field($model, 'monto_ingreso') ?>
        <?= $form->field($model, 'desde') ?>
        <?= $form->field($model, 'hasta') ?>
        <?= $form->field($model, 'telefono_hab') ?>
        <?= $form->field($model, 'tipo_ingreso') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-familia -->
