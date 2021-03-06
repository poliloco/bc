<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReciboCobro */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\ArrayHelper;

use app\models\Periodo;
$periodo=Periodo::find()->all();
$listData=ArrayHelper::map($periodo,'aniomes','aniomes');

?>

<div class="recibo-cobro-form">

    <?php $form = ActiveForm::begin(); ?>

  <div class="col-lg-4">
    <!--<?= $form->field($model, 'periodo')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'periodo')->dropDownList(
	                                $listData,
	                                ['prompt'=>'Selecione Periodo...']) ?>
  </div>
  <!--
    <?= $form->field($model, 'propiedad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alicuota')->textInput() ?>

    <?= $form->field($model, 'cedula_responsable')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_responsable')->textInput(['maxlength' => true]) ?>-->

  <div class="col-lg-4">
    <?= $form->field($model, 'monto')->textInput() ?>
  </div>
    <!--<?= $form->field($model, 'fecha_registro')->textInput() ?>

    <?= $form->field($model, 'fecha_pago')->textInput() ?>

    <?= $form->field($model, 'fecha_acreditacion')->textInput() ?>

    <?= $form->field($model, 'condicion')->textInput() ?>-->

  <div class="col-lg-4">
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
  </div>

    <?php ActiveForm::end(); ?>

</div>
