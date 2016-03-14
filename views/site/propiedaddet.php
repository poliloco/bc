<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PropiedadDet */
/* @var $form ActiveForm */
?>
<div class="site-propiedaddet">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_propiedad') ?>
        <?= $form->field($model, 'tipo') ?>
        <?= $form->field($model, 'habitaciones') ?>
        <?= $form->field($model, 'paredes') ?>
        <?= $form->field($model, 'enseres') ?>
        <?= $form->field($model, 'servicio_aseo') ?>
        <?= $form->field($model, 'servicio_comunal') ?>
        <?= $form->field($model, 'techo') ?>
        <?= $form->field($model, 'terreno_propio') ?>
        <?= $form->field($model, 'ocv') ?>
        <?= $form->field($model, 'ambientes') ?>
        <?= $form->field($model, 'salubridad') ?>
        <?= $form->field($model, 'plagas') ?>
        <?= $form->field($model, 'mascotas') ?>
        <?= $form->field($model, 'servicio_agua') ?>
        <?= $form->field($model, 'servicio_cloaca') ?>
        <?= $form->field($model, 'servicio_gas') ?>
        <?= $form->field($model, 'servicio_electrico') ?>
        <?= $form->field($model, 'servicio_telefonia') ?>
        <?= $form->field($model, 'servicio_transporte') ?>
        <?= $form->field($model, 'servicio_infrmacion') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-propiedaddet -->
