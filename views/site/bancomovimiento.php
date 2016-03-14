<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BancoMovimiento */
/* @var $form ActiveForm */
?>
<div class="site-bancomovimiento">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'cuenta_banco') ?>
        <?= $form->field($model, 'referencia') ?>
        <?= $form->field($model, 'periodo') ?>
        <?= $form->field($model, 'fecha_movimiento') ?>
        <?= $form->field($model, 'persona') ?>
        <?= $form->field($model, 'concepto') ?>
        <?= $form->field($model, 'fecha_registro') ?>
        <?= $form->field($model, 'cargo') ?>
        <?= $form->field($model, 'abono') ?>
        <?= $form->field($model, 'tipo') ?>
        <?= $form->field($model, 'condicion') ?>
        <?= $form->field($model, 'conciliado') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-bancomovimiento -->
