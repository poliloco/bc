<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Familia */

$this->title = 'Actualizar Familia: ' . ' ' . $model->id_familia;
$this->params['breadcrumbs'][] = ['label' => 'Familias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_familia, 'url' => ['view', 'id' => $model->id_familia]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="familia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
