<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Propiedad */

$this->title = 'Actualizar Propiedad: ' . ' ' . $model->id_propiedad;
$this->params['breadcrumbs'][] = ['label' => 'Propiedad', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_propiedad, 'url' => ['view', 'id' => $model->id_propiedad]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="propiedad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
