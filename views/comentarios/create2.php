<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Comentarios */

$this->title = 'Crear Comentarios';
$this->params['breadcrumbs'][] = ['label' => 'Comentarios', 'url' => ['index2']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comentarios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form2', [
        'model' => $model,
    ]) ?>

</div>
