<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Catalogo */
/* @var $form ActiveForm */
?>
<div class="site-catalogo">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'cuenta_contable') ?>
        <?= $form->field($model, 'descripcion') ?>
        <?= $form->field($model, 'nivel') ?>
        <?= $form->field($model, 'condicion') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-catalogo -->
