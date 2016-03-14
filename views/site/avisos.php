<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Avisos */
/* @var $form ActiveForm */
?>
<div class="site-avisos">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'titulo') ?>
        <?= $form->field($model, 'contenido') ?>
        <?= $form->field($model, 'fecha') ?>
        <?= $form->field($model, 'condicion') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-avisos -->
