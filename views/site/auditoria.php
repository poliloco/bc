<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Auditoria */
/* @var $form ActiveForm */
?>
<div class="site-auditoria">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'user') ?>
        <?= $form->field($model, 'modelo') ?>
        <?= $form->field($model, 'accion') ?>
        <?= $form->field($model, 'fechahora') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-auditoria -->
