<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Auditoria */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auditoria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fechahora')->textInput() ?>

    <div class="form-group">
        <!--<?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>-->
    </div>

    <?php ActiveForm::end(); ?>

</div>
