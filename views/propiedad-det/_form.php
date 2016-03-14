<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PropiedadDet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="propiedad-det-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_propiedad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'terreno_propio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ocv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ambientes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'habitaciones')->textInput() ?>

    <?= $form->field($model, 'paredes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'techo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enseres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salubridad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plagas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mascotas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'servicio_agua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'servicio_cloaca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'servicio_gas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'servicio_electrico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'servicio_aseo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'servicio_telefonia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'servicio_transporte')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'servicio_infrmacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'servicio_comunal')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
