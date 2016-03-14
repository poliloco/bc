<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Avisos */

$this->title = 'Actualizar Avisos: ' . ' ' . $model->id_avisos;
$this->params['breadcrumbs'][] = ['label' => 'Avisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_avisos, 'url' => ['view', 'id' => $model->id_avisos]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="avisos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
