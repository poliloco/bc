<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reservacion */

$this->title = 'Actualizar Reservacion: ' . ' ' . $model->id_reservacion;
$this->params['breadcrumbs'][] = ['label' => 'Reservacions', 'url' => ['index2']];
$this->params['breadcrumbs'][] = ['label' => $model->id_reservacion, 'url' => ['view2', 'id' => $model->id_reservacion]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="reservacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
