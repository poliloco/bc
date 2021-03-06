<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\BancoMovimiento */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\ArrayHelper;

use app\models\Banco;
$banco=Banco::find()->all();
$listData0=ArrayHelper::map($banco,'cuenta_banco','cuenta_banco');

use app\models\Periodo;
$periodo=Periodo::find()->all();
$listData1=ArrayHelper::map($periodo,'aniomes','aniomes');
?>

<div class="banco-movimiento-form">

    <?php $form = ActiveForm::begin(); ?>

  <div class="col-lg-4">
    <?= $form->field($model, 'cuenta_banco')->dropDownList(
	                                $listData0,
	                                ['prompt'=>'Selecione Cuenta Banco...']) ?>
    <?= $form->field($model, 'tipo')->radioList(
                                     ['Deposito'=>'Deposito','Transferencia'=>'Transferencia']) ?>
<?php
echo '<label>Fecha Movimiento</label>';
echo DatePicker::widget([
    'model' => $model,
    'attribute' => 'fecha_movimiento',
    'name' => 'fecha_movimiento', 
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
    <?= $form->field($model, 'referencia')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'persona')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'concepto')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-lg-4">
    <?= $form->field($model, 'periodo')->dropDownList(
	                                $listData1,
	                                ['prompt'=>'Selecione Periodo...']) ?>
    <?= $form->field($model, 'abono')->textInput() ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
  </div>

    <!--<?= $form->field($model, 'cargo')->textInput() ?>-->


    <!--<?= $form->field($model, 'conciliado')->textInput(['maxlength' => true]) ?>-->

    <!--<?= $form->field($model, 'condicion')->textInput(['maxlength' => true]) ?>-->


    <?php ActiveForm::end(); ?>

</div>
