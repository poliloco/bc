<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Diario */

$this->title = $model->id_diario;
$this->params['breadcrumbs'][] = ['label' => 'Diarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_diario], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id_diario], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta Seguro que quiere borrar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_diario',
            'aniomes',
            'fecha',
            'descripcion',
            'condicion',
        ],
    ]) ?>

</div>
