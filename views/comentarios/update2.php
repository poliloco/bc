<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Comentarios */

$this->title = 'Actualizar Comentarios: ' . ' ' . $model->id_comentarios;
$this->params['breadcrumbs'][] = ['label' => 'Comentarios', 'url' => ['index2']];
$this->params['breadcrumbs'][] = ['label' => $model->id_comentarios, 'url' => ['view2', 'id' => $model->id_comentarios]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="comentarios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form2', [
        'model' => $model,
    ]) ?>

</div>
