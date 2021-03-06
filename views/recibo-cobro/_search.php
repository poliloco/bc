<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReciboCobroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="recibo-cobro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_recibo_cobro') ?>

    <?= $form->field($model, 'periodo') ?>

    <?= $form->field($model, 'propiedad') ?>

    <?= $form->field($model, 'alicuota') ?>

    <?= $form->field($model, 'cedula_responsable') ?>

    <?php // echo $form->field($model, 'nombre_responsable') ?>

    <?php // echo $form->field($model, 'monto') ?>

    <?php // echo $form->field($model, 'abono') ?>

    <?php // echo $form->field($model, 'fecha_registro') ?>

    <?php // echo $form->field($model, 'fecha_pago') ?>

    <?php // echo $form->field($model, 'fecha_acreditacion') ?>

    <?php // echo $form->field($model, 'condicion') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
