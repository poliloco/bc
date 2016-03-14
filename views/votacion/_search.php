<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VotacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="votacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_votacion') ?>

    <?= $form->field($model, 'proyecto') ?>

    <?= $form->field($model, 'familia') ?>

    <?= $form->field($model, 'voto') ?>

    <?= $form->field($model, 'fecha_voto') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
