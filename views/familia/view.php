<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Familia */

$this->title = $model->id_familia;
$this->params['breadcrumbs'][] = ['label' => 'Familias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="familia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_familia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id_familia], [
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
            'id_familia',
            'familia',
            'propiedad',
            'jefe_familia',
            'telefono_hab',
            'tenencia_propiedad',
            'tipo_ingreso',
            'monto_ingreso',
            'desde',
            'hasta',
        ],
    ]) ?>

</div>
