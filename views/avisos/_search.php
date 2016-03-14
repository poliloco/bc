<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AvisosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="avisos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_avisos') ?>

    <?= $form->field($model, 'titulo') ?>

    <?= $form->field($model, 'contenido') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'condicion') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
