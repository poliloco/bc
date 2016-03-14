<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\ArrayHelper;

use app\models\Propiedad;
$propiedad=Propiedad::find()->all();
$listData=ArrayHelper::map($propiedad,'propiedad','propiedad');
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

  <div class="col-lg-4">
    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_reset_token')->textInput(['readonly' => true, 'value' => 'Token','maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-lg-4">
    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'propiedad')->dropDownList(
	                                $listData,
	                                ['prompt'=>'Selecione Propiedad...']) ?>

    <?= $form->field($model, 'condicion')->radioList(
                                     ['Activo'=>'Activo','Suspendido'=>'Suspendido'] ) ?>
  </div>
  <div class="col-lg-4">
    <?= $form->field($model, 'auth_key')->textInput(['readonly' => true, 'value' => 'Key','maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->radioList(
                                     ['Residente'=>'Residente', 'Condominio'=>'Condominio', 'Administrador'=>'Administrador', 'Configuracion'=>'Configuracion', 'Auditor'=>'Auditor'] ) ?>
  </div>
    <!--<?= $form->field($model, 'propiedad')->textInput(['maxlength' => true]) ?>-->
    <!--<?= $form->field($model, 'tipo')->textInput(['maxlength' => true]) ?>-->
    <!--<?= $form->field($model, 'condicion')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-4">
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
  </div>

    <?php ActiveForm::end(); ?>

</div>
