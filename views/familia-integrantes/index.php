<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FamiliaIntegrantesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Familia Integrantes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="familia-integrantes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Familia Integrantes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_familia_integrantes',
            'id_familia',
            'cedula',
            'apellido',
            'nombre',
            // 'fecha_nacimiento',
            // 'lugar_nacimiento',
            // 'sexo',
            // 'parentesco',
            // 'nivel_instruccion',
            // 'profesion',
            // 'trabaja',
            // 'lugar_trabajo',
            // 'ingreso_mensual',
            // 'telefono_cel',
            // 'estado_civil',
            // 'correo',
            // 'foto',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {update} {delete}'],
        ],
    ]); ?>

</div>
