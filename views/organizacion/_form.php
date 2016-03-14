<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model app\models\Organizacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="organizacion-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

  <div class="col-lg-4">
    <?= $form->field($model, 'razon_social')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sector')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'imagen')->fileInput() ?>
  </div>
    <!--<?= $form->field($model, 'rif')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-4">
    <?php echo '<label>RIF: </label>'.MaskedInput::widget([
        'model' => $model,
        'attribute' => 'rif',
        'name' => 'rif',
        'mask' => 'A-99999999-9'
//        'clientOptions' => ['alias' =>  'yyyy-mm-dd']
    ]);?>

    <?= $form->field($model, 'municipio')->textInput(['maxlength' => true]) ?>

    <?php echo '<label>Telefono: </label>'.MaskedInput::widget([
        'model' => $model,
        'attribute' => 'telefono',
        'name' => 'telefono',
        'mask' => '(9999)999.99.99'
//        'clientOptions' => ['alias' =>  'yyyy-mm-dd']
    ]);?>
<br>
    <?= $form->field($model, 'condicion')->radioList(
                                     ['Activa'=>'Activa','Inactiva'=>'Inactiva'] ) ?>

  </div>
  <div class="col-lg-4">
    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parroquia')->textInput(['maxlength' => true]) ?>

    <?php echo '<label>Correo: </label>'.MaskedInput::widget([
        'model' => $model,
        'attribute' => 'correo',
        'name' => 'correo',
//        'mask' => '(9999)999.99.99'
        'clientOptions' => ['alias' =>  'email']
    ]);?>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
  </div>

    <?php ActiveForm::end(); ?>

</div>
