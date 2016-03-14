<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Diario */

$this->title = 'Crear Diario';
$this->params['breadcrumbs'][] = ['label' => 'Diarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
