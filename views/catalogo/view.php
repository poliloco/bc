<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Catalogo */

$this->title = $model->id_catalogo;
$this->params['breadcrumbs'][] = ['label' => 'Catalogos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catalogo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_catalogo], ['class' => 'btn btn-primary']) ?>
        <!--<?= Html::a('Borrar', ['delete', 'id' => $model->id_catalogo], [
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
            'id_catalogo',
            'cuenta_contable',
            'descripcion',
            'nivel',
            'condicion',
        ],
    ]) ?>

</div>
