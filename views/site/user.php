<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form ActiveForm */
?>
<div class="site-user">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'password') ?>
        <?= $form->field($model, 'auth_key') ?>
        <?= $form->field($model, 'password_reset_token') ?>
        <?= $form->field($model, 'tipo') ?>
        <?= $form->field($model, 'propiedad') ?>
        <?= $form->field($model, 'condicion') ?>
        <?= $form->field($model, 'foto') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-user -->
