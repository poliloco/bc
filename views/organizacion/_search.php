<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrganizacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="organizacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_organizacion') ?>

    <?= $form->field($model, 'razon_social') ?>

    <?= $form->field($model, 'rif') ?>

    <?= $form->field($model, 'estado') ?>

    <?= $form->field($model, 'municipio') ?>

    <?php // echo $form->field($model, 'parroquia') ?>

    <?php // echo $form->field($model, 'sector') ?>

    <?php // echo $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'correo') ?>

    <?php // echo $form->field($model, 'logo') ?>

    <?php // echo $form->field($model, 'condicion') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
