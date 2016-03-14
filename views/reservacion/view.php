<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Reservacion */

$this->title = $model->id_reservacion;
$this->params['breadcrumbs'][] = ['label' => 'Reservacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_reservacion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id_reservacion], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta Seguro que quiere borrar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_reservacion',
            'instalacion',
            'fecha_reserva',
            'familia',
            'motivo',
            'responsable_reserva',
            'fecha_registro',
            'aprobado',
            'fecha_aprobacion',
            'responsable_aprobacion',
        ],
    ]) ?>

</div>
