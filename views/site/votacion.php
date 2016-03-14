<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Votacion */
/* @var $form ActiveForm */
?>
<div class="site-votacion">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'proyecto') ?>
        <?= $form->field($model, 'familia') ?>
        <?= $form->field($model, 'voto') ?>
        <?= $form->field($model, 'fecha_voto') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-votacion -->
