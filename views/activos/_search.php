<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ActivosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="activos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_activos') ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'cantidad') ?>

    <?= $form->field($model, 'costo') ?>

    <?php // echo $form->field($model, 'fecha_compra') ?>

    <?php // echo $form->field($model, 'cuenta_contable') ?>

    <?php // echo $form->field($model, 'condicion') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
