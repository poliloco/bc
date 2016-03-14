<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$nombre=Yii::$app->user->identity->username;

/* @var $this yii\web\View */
/* @var $model app\models\Propiedad */

$this->title = $model->id_propiedad;
if ($nombre=='Administrador'){
$this->params['breadcrumbs'][] = ['label' => 'Propiedad', 'url' => ['index']];
  }
else{
$this->params['breadcrumbs'][] = ['label' => 'Propiedad', 'url' => ['index2']];
  }
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propiedad-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<?php
if ($nombre=='Administrador'){ ?>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_propiedad], ['class' => 'btn btn-primary']) ?>
  <?php }
  else
  {} ?>
        <!--<?= Html::a('Borrar', ['delete', 'id' => $model->id_propiedad], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta Seguro que quiere borrar este item?',
                'method' => 'post',
            ],
        ]) ?>-->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_propiedad',
            'propiedad',
            'superficie',
            'alicuota',
            'cuenta_contable',
            'cuenta_ingresos',
            'cedula_responsable',
            'nombre_responsable',
            'telefono_responsable',
            'correo_responsable',
            'condicion',
        ],
    ]) ?>

</div>
