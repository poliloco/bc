<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Proyectos */
/* @var $form ActiveForm */
?>
<div class="site-proyectos">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'proveedor') ?>
        <?= $form->field($model, 'proyecto') ?>
        <?= $form->field($model, 'costo') ?>
        <?= $form->field($model, 'cuenta_contable') ?>
        <?= $form->field($model, 'descripcion') ?>
        <?= $form->field($model, 'condicion') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-proyectos -->
