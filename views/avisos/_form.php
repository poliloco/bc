<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Avisos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="avisos-form">

    <?php $form = ActiveForm::begin(); ?>

  <div class="col-lg-4">
    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'condicion')->radioList(
                                     ['Activo'=>'Activo','Vencido'=>'Vencido']) ?>
  </div>
  <div class="col-lg-6">
    <?= $form->field($model, 'contenido')->textarea(['rows' => 6]) ?>
  </div>
    <!--<?= $form->field($model, 'fecha')->textInput() ?>-->

    <!--<?= $form->field($model, 'condicion')->textInput(['maxlength' => true]) ?>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
