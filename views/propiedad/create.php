<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Propiedad */

$this->title = 'Crear Propiedad';
$this->params['breadcrumbs'][] = ['label' => 'Propiedad', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propiedad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
