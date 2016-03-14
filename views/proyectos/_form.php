<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Proyectos */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\ArrayHelper;

use app\models\Catalogo;
$catalogo=Catalogo::find()->where(['LIKE','cuenta_contable','1.02.04'])->all();
$listData=ArrayHelper::map($catalogo,'cuenta_contable','descripcion');

use app\models\Proveedores;
$proveedores=Proveedores::find()->all();
$listData0=ArrayHelper::map($proveedores,'nombre','nombre');

?>

<div class="proyectos-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'proveedor')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-4">
    <?= $form->field($model, 'proveedor')->dropDownList(
	                                $listData0,
	                                ['prompt'=>'Selecione Proveedor/Contratista...']) ?>
    <?= $form->field($model, 'proyecto')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'costo')->textInput() ?>
  </div>
  <div class="col-lg-4">
    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>
  </div>
  <div class="col-lg-4">
    <?= $form->field($model, 'cuenta_contable')->dropDownList(
	                                $listData,
	                                ['prompt'=>'Selecione Cuenta Contable...']) ?>
     <?= $form->field($model, 'condicion')->radioList(
                                     ['Proyecto'=>'Proyecto', 'Aprobado'=>'Aprobado', 'Negado'=>'Negado',
                                      'Ejecucion'=>'Ejecucion', 'Paralizado'=>'Paralizado', 'Finalizado'=>'Finalizado']) ?>
  </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
