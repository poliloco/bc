<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Activos */

$this->title = 'Actualizar Activos: ' . ' ' . $model->id_activos;
$this->params['breadcrumbs'][] = ['label' => 'Activos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_activos, 'url' => ['view', 'id' => $model->id_activos]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="activos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
