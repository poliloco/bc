<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Votacion */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\ArrayHelper;

use app\models\Proyectos;
//$sql="select '$vivienda' numero";
//$familia=Vivienda::findBySql($sql)->all();
$proyectos=Proyectos::find()->all();
$listData0=ArrayHelper::map($proyectos,'proyecto','proyecto'); 

$vivienda=Yii::$app->user->identity->propiedad;

use app\models\Familia;
//$sql="select * from familia where familia='$familia'";
//$familia=Familia::findBySql($sql)->all();
$familia=Familia::find()->where(['propiedad' => $vivienda])->all();
$listData=ArrayHelper::map($familia,'familia','familia'); 

?>

<div class="votacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'proyecto')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-4">
    <?= $form->field($model, 'proyecto')->radioList(
	                                $listData0,
	                                ['prompt'=>'Selecione Proyecto...']) ?>
  </div>
    <!--<?= $form->field($model, 'familia')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-4">
    <?= $form->field($model, 'familia')->dropDownList(
	                                $listData) ?>
  </div>
    <!--<?= $form->field($model, 'voto')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'voto')->radioList(
                                     ['Si'=>'Si','No'=>'No']) ?>

    <!--<?= $form->field($model, 'fecha_voto')->textInput() ?>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
