<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FacturasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Facturas Proveedor';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="facturas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!--<?= Html::a('Registrar Facturas', ['create'], ['class' => 'btn btn-success']) ?>-->
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_facturas',
            'numero',
            //'control',
            //'periodo',
            'fecha',
            'proveedor',
            'concepto',
            'monto',
            'abono',
            'condicion',
            //'fecha_registro',
            //'fecha_modificacion',

            //['class' => 'yii\grid\ActionColumn', 'template' => '{view}'],
        ],
    ]); ?>

</div>
