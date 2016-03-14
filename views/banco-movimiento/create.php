<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BancoMovimiento */

$this->title = 'Crear Movimiento de Banco';
$this->params['breadcrumbs'][] = ['label' => 'Movimientos Banco', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banco-movimiento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
