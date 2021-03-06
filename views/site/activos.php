<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Activos */
/* @var $form ActiveForm */
?>
<div class="site-activos">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'codigo') ?>
        <?= $form->field($model, 'descripcion') ?>
        <?= $form->field($model, 'cantidad') ?>
        <?= $form->field($model, 'costo') ?>
        <?= $form->field($model, 'fecha_compra') ?>
        <?= $form->field($model, 'cuenta_contable') ?>
        <?= $form->field($model, 'condicion') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-activos -->
