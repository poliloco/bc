<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Reservacion */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\ArrayHelper;

use app\models\Instalaciones;
$instalaciones=Instalaciones::find()->all();
$listData0=ArrayHelper::map($instalaciones,'descripcion','descripcion');

use app\models\Familia;
$familia=Familia::find()->all();
$listData=ArrayHelper::map($familia,'familia','familia');
?>

<div class="reservacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'instalacion')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-4">
    <?= $form->field($model, 'instalacion')->dropDownList(
	                                $listData0,
	                                ['prompt'=>'Selecione Instalacion...']) ?>
<?php
echo '<label>Fecha Reserva</label>';
echo DatePicker::widget([
    'model' => $model,
    'attribute' => 'fecha_reserva',
    'name' => 'fecha_reserva', 
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
    <?= $form->field($model, 'familia')->dropDownList(
	                                $listData,
	                                ['prompt'=>'Selecione Familia...']) ?>
    <?= $form->field($model, 'responsable_reserva')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-lg-4">
    <?= $form->field($model, 'motivo')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'aprobado')->radioList(
                                     ['Si'=>'Si','No'=>'No']) ?>
  </div>

    <!--<?= $form->field($model, 'familia')->textInput(['maxlength' => true]) ?>-->


    <!--<?= $form->field($model, 'fecha_registro')->textInput() ?>-->

    <!--<?= $form->field($model, 'aprobado')->textInput(['maxlength' => true]) ?>-->

    <!--<?= $form->field($model, 'fecha_aprobacion')->textInput() ?>-->

    <!--<?= $form->field($model, 'responsable_aprobacion')->textInput(['maxlength' => true]) ?>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
