<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Periodo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="periodo-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'anio')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-4">
    <?= $form->field($model, 'anio')->dropDownList(
                                     ['2015'=>'2015','2016'=>'2016','2017'=>'2017']) ?>
  </div>
    <!--<?= $form->field($model, 'mes')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-4">
    <?= $form->field($model, 'mes')->dropDownList([
               'Enero'=>'Enero','Febrero'=>'Febrero','Marzo'=>'Marzo', 'Abril'=>'Abril',
               'Mayo'=>'Mayo','Junio'=>'Junio','Julio'=>'Julio', 'Agosto'=>'Agosto',
               'Septiembre'=>'Septiembre','Octubre'=>'Octubre','Noviembre'=>'Noviembre', 'Diciembre'=>'Diciembre',
                                                  ]) ?>
  </div>
    <!--<?= $form->field($model, 'aniomes')->textInput(['maxlength' => true]) ?>-->
    <!--<?= $form->field($model, 'condicion')->textInput(['maxlength' => true]) ?>-->
    <!--<?= $form->field($model, 'condicion')->radioList(
                                     ['Activo'=>'Activo','Cerrado'=>'Cerrado'] ) ?>-->
  <div class="col-lg-4">
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
  </div>

    <?php ActiveForm::end(); ?>

</div>
