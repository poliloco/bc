<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FamiliaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="familia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_familia') ?>

    <?= $form->field($model, 'familia') ?>

    <?= $form->field($model, 'propiedad') ?>

    <?= $form->field($model, 'jefe_familia') ?>

    <?= $form->field($model, 'telefono_hab') ?>

    <?php // echo $form->field($model, 'tenencia_propiedad') ?>

    <?php // echo $form->field($model, 'tipo_ingreso') ?>

    <?php // echo $form->field($model, 'monto_ingreso') ?>

    <?php // echo $form->field($model, 'desde') ?>

    <?php // echo $form->field($model, 'hasta') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
