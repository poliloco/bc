<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model app\models\Catalogo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="catalogo-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'cuenta_contable')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-6">
    <?php echo '<label>Cuenta Contable: </label>'.MaskedInput::widget([
        'model' => $model,
        'attribute' => 'cuenta_contable',
        'name' => 'cuenta_contable',
        'mask' => '9.99.99.99.999'
//        'clientOptions' => ['alias' =>  'yyyy-mm-dd']
    ]);?>
  </div>
  <div class="col-lg-6">
    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>
  </div>
    <!--<?= $form->field($model, 'nivel')->textInput() ?>-->
  <div class="col-lg-4">
    <?= $form->field($model, 'nivel')->radioList(
                                     ['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5']) ?>
  </div>
    <!--<?= $form->field($model, 'condicion')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-4">
    <?= $form->field($model, 'condicion')->radioList(
                                     ['Activo'=>'Activo','Inactiva'=>'Inactiva'] ) ?>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
  </div>

    <?php ActiveForm::end(); ?>

</div>
