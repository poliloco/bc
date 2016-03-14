<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PropiedadDet */

$this->title = $model->id_propiedad_det;
$this->params['breadcrumbs'][] = ['label' => 'Propiedad Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propiedad-det-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_propiedad_det], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id_propiedad_det], [
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
            'id_propiedad_det',
            'id_propiedad',
            'tipo',
            'terreno_propio',
            'ocv',
            'ambientes',
            'habitaciones',
            'paredes',
            'techo',
            'enseres',
            'salubridad',
            'plagas',
            'mascotas',
            'servicio_agua',
            'servicio_cloaca',
            'servicio_gas',
            'servicio_electrico',
            'servicio_aseo',
            'servicio_telefonia',
            'servicio_transporte',
            'servicio_infrmacion',
            'servicio_comunal',
        ],
    ]) ?>

</div>
