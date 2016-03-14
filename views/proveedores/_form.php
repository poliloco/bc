<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedores */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\ArrayHelper;

use app\models\Catalogo;
$catalogo=Catalogo::find()->where(['LIKE','cuenta_contable','2.01.01.01.'])->andwhere(['LIKE','nivel','5'])->all();
$listData=ArrayHelper::map($catalogo,'cuenta_contable','descripcion');
$catalogo2=Catalogo::find()->where(['LIKE','cuenta_contable','4.0'])->all();
$listData2=ArrayHelper::map($catalogo2,'cuenta_contable','descripcion');
?>

<div class="proveedores-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'rif')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-4">
    <?php echo '<b>RIF:</b> '.MaskedInput::widget([
        'model' => $model,
        'attribute' => 'rif',
        'name' => 'rif',
        'mask' => 'A-99999999-9'
//        'clientOptions' => ['alias' =>  'yyyy-mm-dd']
    ]);
echo '<br>';
?>

    <?= $form->field($model, 'cuenta_contable')->dropDownList(
	                                $listData,
	                                ['prompt'=>'Selecione Cuenta Contable...']) ?>

    <?php echo '<b>Telefono:</b> '.MaskedInput::widget([
        'model' => $model,
        'attribute' => 'telefono',
        'name' => 'telefono',
        'mask' => '(9999)999.99.99'
//        'clientOptions' => ['alias' =>  'yyyy-mm-dd']
    ]);?>

  </div>
  <div class="col-lg-4">
    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cuenta_egresos')->dropDownList(
	                                $listData2,
	                                ['prompt'=>'Selecione Cuenta Egresos...']) ?>

    <?php echo 'Correo: '.MaskedInput::widget([
        'model' => $model,
        'attribute' => 'correo',
        'name' => 'correo',
//        'mask' => '(9999)999.99.99'
        'clientOptions' => ['alias' =>  'email']
    ]);?>

  </div>
  <div class="col-lg-4">
    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'condicion')->radioList(
                                     ['Activo'=>'Activo','Inactivo'=>'Inactivo'] ) ?>

  </div>
    <!--<?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>-->
    <!--<?= $form->field($model, 'cuenta_contable')->textInput(['maxlength' => true]) ?>-->
    <!--<?= $form->field($model, 'condicion')->textInput(['maxlength' => true]) ?>-->
    <!--<?= $form->field($model, 'correo')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-4">
  <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
  </div>

    <?php ActiveForm::end(); ?>

</div>
