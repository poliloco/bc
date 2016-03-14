<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PropiedadDetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Propiedad Dets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propiedad-det-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Propiedad Det', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_propiedad_det',
            'id_propiedad',
            'tipo',
            'terreno_propio',
            'ocv',
            // 'ambientes',
            // 'habitaciones',
            // 'paredes',
            // 'techo',
            // 'enseres',
            // 'salubridad',
            // 'plagas',
            // 'mascotas',
            // 'servicio_agua',
            // 'servicio_cloaca',
            // 'servicio_gas',
            // 'servicio_electrico',
            // 'servicio_aseo',
            // 'servicio_telefonia',
            // 'servicio_transporte',
            // 'servicio_infrmacion',
            // 'servicio_comunal',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {update} {delete}'],
        ],
    ]); ?>

</div>
