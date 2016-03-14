<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ReciboCobroDet */

$this->title = $model->id_recibo_cobro_det;
$this->params['breadcrumbs'][] = ['label' => 'Recibo Cobro Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recibo-cobro-det-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_recibo_cobro_det], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id_recibo_cobro_det], [
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
            'id_recibo_cobro_det',
            'id_recibo_cobro',
            'concepto',
            'proveedor',
            'factura',
            'monto',
        ],
    ]) ?>

</div>
