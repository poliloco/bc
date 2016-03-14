<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comentarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comentarios-form">

    <?php $form = ActiveForm::begin(); ?>

  <div class="col-lg-4">
    <?= $form->field($model, 'familia')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'aprobado')->radioList(
                                     ['Si'=>'Si','No'=>'No']) ?>
 </div>
  <div class="col-lg-6">
    <?= $form->field($model, 'comentario')->textarea(['rows' => 6]) ?>
  </div>
    <!--<?= $form->field($model, 'aprobado')->textInput(['maxlength' => true]) ?>-->

    <!--<?= $form->field($model, 'fecha_registro')->textInput() ?>-->

    <!--<?= $form->field($model, 'fecha_aprobacion')->textInput() ?>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
