<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PropiedadDetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="propiedad-det-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_propiedad_det') ?>

    <?= $form->field($model, 'id_propiedad') ?>

    <?= $form->field($model, 'tipo') ?>

    <?= $form->field($model, 'terreno_propio') ?>

    <?= $form->field($model, 'ocv') ?>

    <?php // echo $form->field($model, 'ambientes') ?>

    <?php // echo $form->field($model, 'habitaciones') ?>

    <?php // echo $form->field($model, 'paredes') ?>

    <?php // echo $form->field($model, 'techo') ?>

    <?php // echo $form->field($model, 'enseres') ?>

    <?php // echo $form->field($model, 'salubridad') ?>

    <?php // echo $form->field($model, 'plagas') ?>

    <?php // echo $form->field($model, 'mascotas') ?>

    <?php // echo $form->field($model, 'servicio_agua') ?>

    <?php // echo $form->field($model, 'servicio_cloaca') ?>

    <?php // echo $form->field($model, 'servicio_gas') ?>

    <?php // echo $form->field($model, 'servicio_electrico') ?>

    <?php // echo $form->field($model, 'servicio_aseo') ?>

    <?php // echo $form->field($model, 'servicio_telefonia') ?>

    <?php // echo $form->field($model, 'servicio_transporte') ?>

    <?php // echo $form->field($model, 'servicio_infrmacion') ?>

    <?php // echo $form->field($model, 'servicio_comunal') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
