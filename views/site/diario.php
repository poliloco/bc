<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Diario */
/* @var $form ActiveForm */
?>
<div class="site-diario">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'aniomes') ?>
        <?= $form->field($model, 'fecha') ?>
        <?= $form->field($model, 'descripcion') ?>
        <?= $form->field($model, 'condicion') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-diario -->
