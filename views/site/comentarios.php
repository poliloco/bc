<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comentarios */
/* @var $form ActiveForm */
?>
<div class="site-comentarios">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'familia') ?>
        <?= $form->field($model, 'comentario') ?>
        <?= $form->field($model, 'fecha_registro') ?>
        <?= $form->field($model, 'fecha_aprobacion') ?>
        <?= $form->field($model, 'aprobado') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-comentarios -->
