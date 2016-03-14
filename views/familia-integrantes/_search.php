<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FamiliaIntegrantesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="familia-integrantes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_familia_integrantes') ?>

    <?= $form->field($model, 'id_familia') ?>

    <?= $form->field($model, 'cedula') ?>

    <?= $form->field($model, 'apellido') ?>

    <?= $form->field($model, 'nombre') ?>

    <?php // echo $form->field($model, 'fecha_nacimiento') ?>

    <?php // echo $form->field($model, 'lugar_nacimiento') ?>

    <?php // echo $form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'parentesco') ?>

    <?php // echo $form->field($model, 'nivel_instruccion') ?>

    <?php // echo $form->field($model, 'profesion') ?>

    <?php // echo $form->field($model, 'trabaja') ?>

    <?php // echo $form->field($model, 'lugar_trabajo') ?>

    <?php // echo $form->field($model, 'ingreso_mensual') ?>

    <?php // echo $form->field($model, 'telefono_cel') ?>

    <?php // echo $form->field($model, 'estado_civil') ?>

    <?php // echo $form->field($model, 'correo') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
