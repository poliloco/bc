<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Votacion */

$this->title = 'Crear Votacion';
$this->params['breadcrumbs'][] = ['label' => 'Votacions', 'url' => ['index2']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="votacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form2', [
        'model' => $model,
    ]) ?>

</div>
