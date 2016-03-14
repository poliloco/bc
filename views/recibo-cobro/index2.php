<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReciboCobroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Recibo Condominio';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recibo-cobro-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!--<?= Html::a('Crear Recibo Condominio Especial', ['create'], ['class' => 'btn btn-success']) ?>-->
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_recibo_cobro',
            'periodo',
            'propiedad',
            //'alicuota',
            'cedula_responsable',
            'nombre_responsable',
            'monto',
            'abono',
            //'fecha_registro',
            'fecha_pago',
            'fecha_acreditacion',
            'condicion',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{print}'],
        ],
    ]); ?>

</div>
