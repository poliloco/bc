<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Catalogo */

$this->title = 'Actualizar Catalogo: ' . ' ' . $model->id_catalogo;
$this->params['breadcrumbs'][] = ['label' => 'Catalogos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_catalogo, 'url' => ['view', 'id' => $model->id_catalogo]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="catalogo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
