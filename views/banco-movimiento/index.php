<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BancoMovimientoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Movimiento Banco';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banco-movimiento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Movimiento Banco ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_banco_movimiento',
            'cuenta_banco',
            'referencia',
            //'periodo',
            'fecha_movimiento',
            //'fecha_registro',
            'tipo',
            'persona',
            'concepto',
            'cargo',
            'abono',
            'conciliado',
            'condicion',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}'],
        ],
    ]); ?>

</div>
