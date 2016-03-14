<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FamiliaIntegrantes */

$this->title = 'Actualizar Familia Integrantes: ' . ' ' . $model->id_familia_integrantes;
$this->params['breadcrumbs'][] = ['label' => 'Familia Integrantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_familia_integrantes, 'url' => ['view', 'id' => $model->id_familia_integrantes]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="familia-integrantes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
