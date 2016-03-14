<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Organizacion */

$this->title = 'Crear Organizacion';
$this->params['breadcrumbs'][] = ['label' => 'Organizacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
