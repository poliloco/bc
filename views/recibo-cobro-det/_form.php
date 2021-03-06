<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReciboCobroDet */
/* @var $form yii\widgets\ActiveForm */

$id = $_GET['id'];

use yii\helpers\ArrayHelper;

use app\models\Periodo;
$periodo=Periodo::find()->all();
$listData=ArrayHelper::map($periodo,'aniomes','aniomes');
use app\models\Proveedores;
$proveedor=Proveedores::find()->all();
$listData1=ArrayHelper::map($proveedor,'nombre','nombre');

?>

<div class="recibo-cobro-det-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'id_recibo_cobro')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-4">
    <?= $form->field($model, 'id_recibo_cobro')->dropDownList([$id => $id]) ?>
  </div>
  <div class="col-lg-4">
    <!--<?= $form->field($model, 'proveedor')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'proveedor')->dropDownList(
	                                $listData1,
	                                ['prompt'=>'Selecione Proveedor...']) ?>
  </div>
  <div class="col-lg-4">
    <?= $form->field($model, 'factura')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-lg-4">
    <?= $form->field($model, 'monto')->textInput() ?>
  </div>
  <div class="col-lg-8">
    <?= $form->field($model, 'concepto')->textInput(['maxlength' => true]) ?>
  </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
