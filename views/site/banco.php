<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Banco */
/* @var $form ActiveForm */
?>
<div class="site-banco">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'banco') ?>
        <?= $form->field($model, 'cuenta_banco') ?>
        <?= $form->field($model, 'nombre') ?>
        <?= $form->field($model, 'fecha_apertura') ?>
        <?= $form->field($model, 'saldo') ?>
        <?= $form->field($model, 'cuenta_contable') ?>
        <?= $form->field($model, 'fecha_cierre') ?>
        <?= $form->field($model, 'condicion') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-banco -->
