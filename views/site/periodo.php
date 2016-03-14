<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Periodo */
/* @var $form ActiveForm */
?>
<div class="site-periodo">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'anio') ?>
        <?= $form->field($model, 'mes') ?>
        <?= $form->field($model, 'condicion') ?>
        <?= $form->field($model, 'aniomes') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-periodo -->
