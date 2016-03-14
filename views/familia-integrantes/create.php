<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FamiliaIntegrantes */

$this->title = 'Crear Familia Integrantes';
$this->params['breadcrumbs'][] = ['label' => 'Familia Integrantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="familia-integrantes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
