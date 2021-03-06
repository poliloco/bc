<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model app\models\Propiedad */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\ArrayHelper;

use app\models\Catalogo;
$catalogo=Catalogo::find()->where(['LIKE','cuenta_contable','1.01.02.01.'])->andwhere(['LIKE','nivel','5'])->all();
$listData=ArrayHelper::map($catalogo,'cuenta_contable','descripcion');
$catalogo2=Catalogo::find()->where(['LIKE','cuenta_contable','3.05.01.01.'])->andwhere(['LIKE','nivel','5'])->all();
$listData2=ArrayHelper::map($catalogo2,'cuenta_contable','descripcion');
?>

<div class="propiedad-form">

    <?php $form = ActiveForm::begin(); ?>

  <div class="col-lg-4">
    <?= $form->field($model, 'propiedad')->textInput(['maxlength' => true]) ?>

    <?php echo '<strong>Cedula Responsable: </strong>'.MaskedInput::widget([
        'model' => $model,
        'attribute' => 'cedula_responsable',
        'name' => 'cedula_responsable',
        'mask' => 'A-99.999.999'
//        'clientOptions' => ['alias' =>  'yyyy-mm-dd']
    ]);?>

    <?php echo '<strong>Telefono Responsable: </strong>'.MaskedInput::widget([
        'model' => $model,
        'attribute' => 'telefono_responsable',
        'name' => 'telefono_responsable',
        'mask' => '(9999)999.99.99'
//        'clientOptions' => ['alias' =>  'yyyy-mm-dd']
    ]);?>

    <?php echo '<strong>Correo responsable: </strong>'.MaskedInput::widget([
        'model' => $model,
        'attribute' => 'correo_responsable',
        'name' => 'correo_responsable',
//        'mask' => '(9999)999.99.99'
        'clientOptions' => ['alias' =>  'email']
    ]);?>

  </div>
  <div class="col-lg-4">
    <?= $form->field($model, 'superficie')->textInput()->hint(' Formato de entrada: xxx.xx') ?>

    <?= $form->field($model, 'nombre_responsable')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cuenta_contable')->dropDownList(
	                                $listData,
	                                ['prompt'=>'Selecione Cuenta Contable...']) ?>
  </div>
  <div class="col-lg-4">
    <?= $form->field($model, 'alicuota')->textInput()->hint(' Formato de entrada: x.xx') ?>

    <?= $form->field($model, 'condicion')->radioList(
                                     ['Ocupada'=>'Ocupada','Libre'=>'Libre'] ) ?>

    <?= $form->field($model, 'cuenta_ingresos')->dropDownList(
	                                $listData2,
	                                ['prompt'=>'Selecione Cuenta Ingresos...']) ?>
  </div>


</br>
</br>
</br>

    <!--<?= $form->field($model, 'condicion')->textInput(['maxlength' => true]) ?>-->
  <div class="col-lg-4">
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
  </div>

    <?php ActiveForm::end(); ?>

</div>
