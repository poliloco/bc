<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ActivosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Activos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Activos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_activos',
            'codigo',
            'descripcion',
            'cantidad',
            'costo',
            'fecha_compra',
            'cuenta_contable',
            'condicion',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {update}'],
        ],
    ]); ?>

</div>
