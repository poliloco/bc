<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Propiedad */
/* @var $form ActiveForm */
?>
<div class="site-propiedad">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'propiedad') ?>
        <?= $form->field($model, 'cuenta_contable') ?>
        <?= $form->field($model, 'cedula_responsable') ?>
        <?= $form->field($model, 'nombre_responsable') ?>
        <?= $form->field($model, 'telefono_responsable') ?>
        <?= $form->field($model, 'correo_responsable') ?>
        <?= $form->field($model, 'superficie') ?>
        <?= $form->field($model, 'alicuota') ?>
        <?= $form->field($model, 'condicion') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-propiedad -->
