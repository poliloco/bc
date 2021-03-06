<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReciboCobroDetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Recibo Cobro Dets';
$this->params['breadcrumbs'][] = $this->title;

$id = $_GET['id'];
use app\models\ReciboCobro;
$condicion=ReciboCobro::find()->select('condicion')->where(['id_recibo_cobro'=>$id])->scalar();
?>
<div class="recibo-cobro-det-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
     <?php if ($condicion<>'Cancelado')
       { ?>
        <?= Html::a('Crear Recibo Cobro Det', ['create', 'id' => $id ], ['class' => 'btn btn-success']) ?>
       <?php }
           else {} ?>

    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_recibo_cobro_det',
            'id_recibo_cobro',
            'concepto',
            'proveedor',
            'factura',
            'monto',

            //['class' => 'yii\grid\ActionColumn', 'template' => '{view} {update} {delete}'],
        ],
    ]); ?>

</div>
