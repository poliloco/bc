<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BancoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banco-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_banco') ?>

    <?= $form->field($model, 'banco') ?>

    <?= $form->field($model, 'cuenta_banco') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'fecha_apertura') ?>

    <?php // echo $form->field($model, 'fecha_cierre') ?>

    <?php // echo $form->field($model, 'saldo') ?>

    <?php // echo $form->field($model, 'cuenta_contable') ?>

    <?php // echo $form->field($model, 'condicion') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
