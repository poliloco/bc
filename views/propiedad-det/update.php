<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PropiedadDet */

$this->title = 'Actualizar Propiedad Det: ' . ' ' . $model->id_propiedad_det;
$this->params['breadcrumbs'][] = ['label' => 'Propiedad Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_propiedad_det, 'url' => ['view', 'id' => $model->id_propiedad_det]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="propiedad-det-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
