<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Activos */

$this->title = $model->id_activos;
$this->params['breadcrumbs'][] = ['label' => 'Activos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_activos], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id_activos], [
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
            'id_activos',
            'codigo',
            'descripcion',
            'cantidad',
            'costo',
            'fecha_compra',
            'cuenta_contable',
            'condicion',
        ],
    ]) ?>

</div>
