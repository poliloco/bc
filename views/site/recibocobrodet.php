<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReciboCobroDet */
/* @var $form ActiveForm */
?>
<div class="site-recibocobrodet">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_recibo_cobro') ?>
        <?= $form->field($model, 'concepto') ?>
        <?= $form->field($model, 'proveedor') ?>
        <?= $form->field($model, 'factura') ?>
        <?= $form->field($model, 'monto') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-recibocobrodet -->
