<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Organizacion */

$this->title = 'Actualizar Organizacion: ' . ' ' . $model->id_organizacion;
$this->params['breadcrumbs'][] = ['label' => 'Organizacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_organizacion, 'url' => ['view', 'id' => $model->id_organizacion]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="organizacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
