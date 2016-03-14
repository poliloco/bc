<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\widgets\MaskedInput;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Familia */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\ArrayHelper;

use app\models\Propiedad;
$propiedad=Propiedad::find()->all();
$listData=ArrayHelper::map($propiedad,'propiedad','propiedad');
?>

<div class="familia-form">

    <?php $form = ActiveForm::begin(); ?>

  <div class="col-lg-4">
    <?= $form->field($model, 'familia')->textInput(['maxlength' => true]) ?>

    <?php echo 'Telefono Hab: '.MaskedInput::widget([
        'model' => $model,
        'attribute' => 'telefono_hab',
        'name' => 'telefono_hab',
        'mask' => '(9999)999.99.99'
//        'clientOptions' => ['alias' =>  'yyyy-mm-dd']
    ]);?>

    <?= $form->field($model, 'monto_ingreso')->textInput() ?>
  </div>
    <!--<?= $form->field($model, 'propiedad')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-4">
    <?= $form->field($model, 'propiedad')->dropDownList(
	                                $listData,
	                                ['prompt'=>'Selecione Propiedad...']) ?>

    <?= $form->field($model, 'tenencia_propiedad')->radioList(
                                     ['Propia'=>'Propia','Alquilada'=>'Alquilada',
                                      'Compartida'=>'Compartida','Invadida'=>'Inavidida',
                                      'Traspasada'=>'Traspasada','Prestada'=>'Prestada'] ) ?>

<?php
echo '<label>Desde</label>';
echo DatePicker::widget([
    'model' => $model,
    'attribute' => 'desde',
    'name' => 'desde', 
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
    <?= $form->field($model, 'jefe_familia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_ingreso')->radioList(
                                     ['Diario'=>'Diario','Semanal'=>'Semanal',
                                      'Quincenal'=>'Quincenal','Mensual'=>'Mensual',
                                      'Por Obra'=>'Por Obra'] ) ?>
<?php
echo '<label>Hasta</label>';
echo DatePicker::widget([
    'model' => $model,
    'attribute' => 'hasta',
    'name' => 'hasta', 
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
    <!--<?= $form->field($model, 'telefono_hab')->textInput(['maxlength' => true]) ?>-->
    <!--<?= $form->field($model, 'tenencia_propiedad')->textInput(['maxlength' => true]) ?>-->
    <!--<?= $form->field($model, 'tipo_ingreso')->textInput(['maxlength' => true]) ?>-->
    <!--<?= $form->field($model, 'desde')->textInput() ?>-->
    <!--<?= $form->field($model, 'hasta')->textInput() ?>-->

  <div class="col-lg-4">
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
  </div>

    <?php ActiveForm::end(); ?>

</div>
