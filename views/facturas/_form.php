<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Facturas */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\ArrayHelper;

use app\models\Proveedores;
$proveedores=Proveedores::find()->where(['condicion'=>'Activo'])->all();
$listData0=ArrayHelper::map($proveedores,'nombre','nombre');

use app\models\Periodo;
$periodo=Periodo::find()->where(['condicion'=>'Activo'])->all();
$listData=ArrayHelper::map($periodo,'aniomes','aniomes');
?>

<div class="facturas-form">

    <?php $form = ActiveForm::begin(); ?>

  <div class="col-lg-4">
    <?= $form->field($model, 'numero')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'proveedor')->dropDownList(
	                                $listData0,
	                                ['prompt'=>'Selecione Proveedor/Contratista...']) ?>
  </div>
  <div class="col-lg-4">
    <?= $form->field($model, 'control')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'monto')->textInput() ?>    
  </div>
  <div class="col-lg-4">
    <!--<?= $form->field($model, 'periodo')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'periodo')->dropDownList(
	                                $listData,
	                                ['prompt'=>'Selecione Periodo...']) ?>
	                                
<?php
echo '<label>Fecha</label>';
echo DatePicker::widget([
    'model' => $model,
    'attribute' => 'fecha',
    'name' => 'fecha', 
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
  <div class="col-lg-8">
    <?= $form->field($model, 'concepto')->textInput(['maxlength' => true]) ?>
  </div>
    <!--<?= $form->field($model, 'condicion')->textInput(['maxlength' => true]) ?>-->
    <!--<?= $form->field($model, 'condicion')->radioList(
                                     ['Activa'=>'Activa', 'Cancelada'=>'Cancelada']) ?>--> 
    <!--<?= $form->field($model, 'fecha_registro')->textInput() ?>-->

    <!--<?= $form->field($model, 'fecha_modificacion')->textInput() ?>-->

  <div class="col-lg-4">
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
  </div>
    <?php ActiveForm::end(); ?>

</div>
