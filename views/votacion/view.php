<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Votacion */

$this->title = $model->id_votacion;
$this->params['breadcrumbs'][] = ['label' => 'Votacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="votacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!--<?= Html::a('Actualizar', ['update', 'id' => $model->id_votacion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id_votacion], [
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
            'id_votacion',
            'proyecto',
            'familia',
            'voto',
            'fecha_voto',
        ],
    ]) ?>

</div>
