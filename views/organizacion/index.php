<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrganizacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Organizacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--<p>
        <?= Html::a('Crear Organizacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_organizacion',
            'razon_social',
            'rif',
            // 'estado',
            // 'municipio',
            // 'parroquia',
            // 'sector',
            'direccion',
            'telefono',
            'correo',
            // 'logo',
            // 'condicion',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{img}'],
            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {update}'],
        ],
    ]); ?>

</div>
