<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Organizacion */

$this->title = $model->id_organizacion;
$this->params['breadcrumbs'][] = ['label' => 'Organizacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_organizacion], ['class' => 'btn btn-primary']) ?>
        <!--<?= Html::a('Borrar', ['delete', 'id' => $model->id_organizacion], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta Seguro que quiere borrar este item?',
                'method' => 'post',
            ],
        ]) ?>-->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_organizacion',
            'razon_social',
            'rif',
            'estado',
            'municipio',
            'parroquia',
            'sector',
            'direccion',
            'telefono',
            'correo',
            'logo',
            'condicion',
        ],
    ]) ?>

</div>
