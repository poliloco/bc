<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FamiliaIntegrantes */
/* @var $form ActiveForm */
?>
<div class="site-familiaintegrantes">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_familia') ?>
        <?= $form->field($model, 'cedula') ?>
        <?= $form->field($model, 'apellido') ?>
        <?= $form->field($model, 'nombre') ?>
        <?= $form->field($model, 'profesion') ?>
        <?= $form->field($model, 'ingreso_mensual') ?>
        <?= $form->field($model, 'fecha_nacimiento') ?>
        <?= $form->field($model, 'correo') ?>
        <?= $form->field($model, 'lugar_nacimiento') ?>
        <?= $form->field($model, 'lugar_trabajo') ?>
        <?= $form->field($model, 'foto') ?>
        <?= $form->field($model, 'sexo') ?>
        <?= $form->field($model, 'parentesco') ?>
        <?= $form->field($model, 'nivel_instruccion') ?>
        <?= $form->field($model, 'estado_civil') ?>
        <?= $form->field($model, 'trabaja') ?>
        <?= $form->field($model, 'telefono_cel') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-familiaintegrantes -->
