<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Proyectos */

$this->title = 'Actualizar Proyectos: ' . ' ' . $model->id_proyectos;
$this->params['breadcrumbs'][] = ['label' => 'Proyectos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_proyectos, 'url' => ['view', 'id' => $model->id_proyectos]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="proyectos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
