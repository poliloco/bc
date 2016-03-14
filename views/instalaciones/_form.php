<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Instalaciones */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\ArrayHelper;

use app\models\Catalogo;
$catalogo=Catalogo::find()->where(['LIKE','cuenta_contable','1.02.03.03'])->all();
$listData=ArrayHelper::map($catalogo,'cuenta_contable','descripcion');
?>

<div class="instalaciones-form">

    <?php $form = ActiveForm::begin(); ?>

  <div class="col-lg-4">
    <?= $form->field($model, 'codigo')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-lg-4">
    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-lg-4">
    <?= $form->field($model, 'capacidad')->textInput() ?>
  </div>
  <div class="col-lg-4">
    <?= $form->field($model, 'alquiler')->textInput() ?>
  </div>
    <!--<?= $form->field($model, 'cuenta_contable')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-4">
    <?= $form->field($model, 'cuenta_contable')->dropDownList(
	                                $listData,
	                                ['prompt'=>'Selecione Cuenta Contable...']) ?>
  </div>
    <!--<?= $form->field($model, 'condicion')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-4">
    <?= $form->field($model, 'condicion')->radioList(
                                     ['Disponible'=>'Disponible','Mantenimiento'=>'Mantenimiento']) ?>
  </div>
  <div class="col-lg-8">
    <?= $form->field($model, 'detalles')->textarea(['rows' => 6]) ?>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
  </div>

    <?php ActiveForm::end(); ?>

</div>
