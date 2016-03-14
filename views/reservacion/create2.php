<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Reservacion */

$this->title = 'Crear Reservacion';
$this->params['breadcrumbs'][] = ['label' => 'Reservacions', 'url' => ['index2']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form2', [
        'model' => $model,
    ]) ?>

</div>
