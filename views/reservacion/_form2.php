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

$vivienda=Yii::$app->user->identity->propiedad;

use app\models\Familia;
//$sql="select * from familia where familia='$familia'";
//$familia=Familia::findBySql($sql)->all();
$familia=Familia::find()->where(['propiedad' => $vivienda])->all();
$listData=ArrayHelper::map($familia,'familia','familia');
?>

<div class="reservacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'instalacion')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-4">
    <?= $form->field($model, 'instalacion')->dropDownList(
	                                $listData0,
	                                ['prompt'=>'Selecione Instalacion...']) ?>

    <!--<?= $form->field($model, 'fecha_reserva')->textInput() ?>-->
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
    <!--<?= $form->field($model, 'familia')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-4">
    <?= $form->field($model, 'familia')->dropDownList(
	                                $listData) ?>
    <?= $form->field($model, 'responsable_reserva')->textInput(['maxlength' => true]) ?>
  </div>
    <!--<?= $form->field($model, 'fecha_registro')->textInput() ?>-->
  <div class="col-lg-4">
    <?= $form->field($model, 'motivo')->textInput(['maxlength' => true]) ?>
  </div>
    <!--<?= $form->field($model, 'aprobado')->textInput(['maxlength' => true]) ?>-->
    <!--<?= $form->field($model, 'aprobado')->radioList(
                                     ['Si'=>'Si','No'=>'No']) ?>-->

    <!--<?= $form->field($model, 'fecha_aprobacion')->textInput() ?>-->

    <!--<?= $form->field($model, 'responsable_aprobacion')->textInput(['maxlength' => true]) ?>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
