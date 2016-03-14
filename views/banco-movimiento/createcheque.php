<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BancoMovimiento */

$this->title = 'Crear Cheque';
$this->params['breadcrumbs'][] = ['label' => 'Cheques', 'url' => ['index-cheque']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banco-movimiento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_cheque', [
        'model' => $model,
    ]) ?>

</div>
