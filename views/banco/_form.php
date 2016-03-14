<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Banco */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\ArrayHelper;

use app\models\Catalogo;
$catalogo=Catalogo::find()->where(['LIKE','cuenta_contable','1.01.01.02'])->all();
$listData=ArrayHelper::map($catalogo,'cuenta_contable','descripcion');
?>

<div class="banco-form">

    <?php $form = ActiveForm::begin(); ?>

  <div class="col-lg-4">
    <?= $form->field($model, 'banco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'condicion')->radioList(
                                     ['Activa'=>'Activa','Cerrada'=>'Cerrada']) ?>

<?php
echo '<label>Fecha Apertura</label>';
echo DatePicker::widget([
    'model' => $model,
    'attribute' => 'fecha_apertura',
    'name' => 'fecha_apertura', 
    'value' => date('yyyy-mm-dd', strtotime('-1 days')),
//    'value' => date('d-M-Y', strtotime('-1 days')),
//    'value' => date('d-M-Y'),
    'options' => ['placeholder' => 'Seleccionar Fecha ...'],
    'pluginOptions' => [
//        'format' => 'dd-M-yyyy',
        'format' => 'yyyy-mm-dd',
        'todayHighlight' => true
    ]
]); ?>
  </div>
  <div class="col-lg-4">
    <?= $form->field($model, 'cuenta_banco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saldo')->textInput() ?>

<?php
echo '<label>Fecha Cierre</label>';
echo DatePicker::widget([
    'model' => $model,
    'attribute' => 'fecha_cierre',
    'name' => 'fecha_cierre', 
    'value' => date('yyyy-mm-dd', strtotime('-1 days')),
//    'value' => date('d-M-Y', strtotime('-1 days')),
//    'value' => date('d-M-Y'),
    'options' => ['placeholder' => 'Seleccionar Fecha ...'],
    'pluginOptions' => [
//        'format' => 'dd-M-yyyy',
        'format' => 'yyyy-mm-dd',
        'todayHighlight' => true
    ]
]); ?>
  </div>
  <div class="col-lg-4">
    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cuenta_contable')->dropDownList(
	                                $listData,
	                                ['prompt'=>'Selecione Cuenta Contable...']) ?>
  </div>
    <!--<?= $form->field($model, 'cuenta_contable')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-4">
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
  </div>

    <?php ActiveForm::end(); ?>

</div>
