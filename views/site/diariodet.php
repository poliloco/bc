<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DiarioDet */
/* @var $form ActiveForm */
?>
<div class="site-diariodet">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_diario') ?>
        <?= $form->field($model, 'cuenta') ?>
        <?= $form->field($model, 'debe') ?>
        <?= $form->field($model, 'haber') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-diariodet -->
