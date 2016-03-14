<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BancoMovimientoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banco-movimiento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_banco_movimiento') ?>

    <?= $form->field($model, 'cuenta_banco') ?>

    <?= $form->field($model, 'referencia') ?>

    <?= $form->field($model, 'periodo') ?>

    <?= $form->field($model, 'fecha_movimiento') ?>

    <?php // echo $form->field($model, 'fecha_registro') ?>

    <?php // echo $form->field($model, 'tipo') ?>

    <?php // echo $form->field($model, 'persona') ?>

    <?php // echo $form->field($model, 'concepto') ?>

    <?php // echo $form->field($model, 'cargo') ?>

    <?php // echo $form->field($model, 'abono') ?>

    <?php // echo $form->field($model, 'conciliado') ?>

    <?php // echo $form->field($model, 'condicion') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
