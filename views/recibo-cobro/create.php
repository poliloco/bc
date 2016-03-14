<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ReciboCobro */

$this->title = 'Crear Cuota Especial';
$this->params['breadcrumbs'][] = ['label' => 'Cuota Especial', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recibo-cobro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
