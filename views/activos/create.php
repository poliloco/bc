<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Activos */

$this->title = 'Crear Activos';
$this->params['breadcrumbs'][] = ['label' => 'Activos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
