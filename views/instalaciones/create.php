<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Instalaciones */

$this->title = 'Crear Instalaciones';
$this->params['breadcrumbs'][] = ['label' => 'Instalaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instalaciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
