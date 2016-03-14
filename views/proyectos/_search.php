<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProyectosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyectos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_proyectos') ?>

    <?= $form->field($model, 'proveedor') ?>

    <?= $form->field($model, 'proyecto') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'costo') ?>

    <?php // echo $form->field($model, 'cuenta_contable') ?>

    <?php // echo $form->field($model, 'condicion') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
