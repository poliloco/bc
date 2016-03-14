<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CatalogoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="catalogo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_catalogo') ?>

    <?= $form->field($model, 'cuenta_contable') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'nivel') ?>

    <?= $form->field($model, 'condicion') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
