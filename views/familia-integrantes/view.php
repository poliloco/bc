<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FamiliaIntegrantes */

$this->title = $model->id_familia_integrantes;
$this->params['breadcrumbs'][] = ['label' => 'Familia Integrantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="familia-integrantes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_familia_integrantes], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id_familia_integrantes], [
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
            'id_familia_integrantes',
            'id_familia',
            'cedula',
            'apellido',
            'nombre',
            'fecha_nacimiento',
            'lugar_nacimiento',
            'sexo',
            'parentesco',
            'nivel_instruccion',
            'profesion',
            'trabaja',
            'lugar_trabajo',
            'ingreso_mensual',
            'telefono_cel',
            'estado_civil',
            'correo',
            'foto',
        ],
    ]) ?>

</div>
