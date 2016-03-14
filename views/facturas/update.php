<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Facturas */

$this->title = 'Actualizar Facturas Provvedor: ' . ' ' . $model->id_facturas;
$this->params['breadcrumbs'][] = ['label' => 'Facturas Proveedor', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_facturas, 'url' => ['view', 'id' => $model->id_facturas]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="facturas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
