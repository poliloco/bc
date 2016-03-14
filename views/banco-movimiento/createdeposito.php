<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BancoMovimiento */

$this->title = 'Crear Deposito';
$this->params['breadcrumbs'][] = ['label' => 'Depositos', 'url' => ['index-deposito']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banco-movimiento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_deposito', [
        'model' => $model,
    ]) ?>

</div>
