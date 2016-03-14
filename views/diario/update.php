<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Diario */

$this->title = 'Actualizar Diario: ' . ' ' . $model->id_diario;
$this->params['breadcrumbs'][] = ['label' => 'Diarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_diario, 'url' => ['view', 'id' => $model->id_diario]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="diario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
