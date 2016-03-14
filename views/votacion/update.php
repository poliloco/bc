<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Votacion */

$this->title = 'Actualizar Votacion: ' . ' ' . $model->id_votacion;
$this->params['breadcrumbs'][] = ['label' => 'Votacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_votacion, 'url' => ['view', 'id' => $model->id_votacion]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="votacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
