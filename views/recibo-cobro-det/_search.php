<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReciboCobroDetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="recibo-cobro-det-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_recibo_cobro_det') ?>

    <?= $form->field($model, 'id_recibo_cobro') ?>

    <?= $form->field($model, 'concepto') ?>

    <?= $form->field($model, 'proveedor') ?>

    <?= $form->field($model, 'factura') ?>

    <?php // echo $form->field($model, 'monto') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
