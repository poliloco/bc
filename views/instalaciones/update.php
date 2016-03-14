<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Instalaciones */

$this->title = 'Actualizar Instalaciones: ' . ' ' . $model->id_instalaciones;
$this->params['breadcrumbs'][] = ['label' => 'Instalaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_instalaciones, 'url' => ['view', 'id' => $model->id_instalaciones]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="instalaciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
