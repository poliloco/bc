<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComentariosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comentarios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_comentarios') ?>

    <?= $form->field($model, 'familia') ?>

    <?= $form->field($model, 'comentario') ?>

    <?= $form->field($model, 'aprobado') ?>

    <?= $form->field($model, 'fecha_registro') ?>

    <?php // echo $form->field($model, 'fecha_aprobacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
