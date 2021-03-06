<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PropiedadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Propiedad';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propiedad-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!--<?= Html::a('Crear Propiedad', ['create'], ['class' => 'btn btn-success']) ?>-->
        <?= Html::a('Listado Propiedad', ['print'], ['class' => 'btn btn-warning']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_propiedad',
            'propiedad',
            'superficie',
            'alicuota',
            //'cuenta_contable',
            //'cuenta_ingresos',
            'cedula_responsable',
            'nombre_responsable',
            'telefono_responsable',
            'correo_responsable',
            'condicion',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}'],
        ],
    ]); ?>

</div>
