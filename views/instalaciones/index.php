<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InstalacionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Instalaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instalaciones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Instalaciones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_instalaciones',
            'codigo',
            'descripcion',
            'capacidad',
            'detalles:ntext',
            'alquiler',
            'cuenta_contable',
            'condicion',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}'],
        ],
    ]); ?>

</div>
