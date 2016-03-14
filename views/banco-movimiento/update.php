<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BancoMovimiento */

$this->title = 'Actualizar Movimiento Banco: ' . ' ' . $model->id_banco_movimiento;
switch ($model->tipo){
  case 'Cheque': $this->params['breadcrumbs'][] = ['label' => 'Banco Cheques', 'url' => ['index-cheque']];
                 $this->params['breadcrumbs'][] = ['label' => $model->id_banco_movimiento, 'url' => ['view', 'id' => $model->id_banco_movimiento]];
                 break;
  case 'Deposito': $this->params['breadcrumbs'][] = ['label' => 'Banco Depositos', 'url' => ['index-deposito']];
                   $this->params['breadcrumbs'][] = ['label' => $model->id_banco_movimiento, 'url' => ['view', 'id' => $model->id_banco_movimiento]];
                   break;
  case 'Trasferencia': $this->params['breadcrumbs'][] = ['label' => 'Banco Depositos', 'url' => ['index-deposito']];
                       $this->params['breadcrumbs'][] = ['label' => $model->id_banco_movimiento, 'url' => ['view', 'id' => $model->id_banco_movimiento]];

                       break;
  default: $this->params['breadcrumbs'][] = ['label' => 'Banco Movimientos', 'url' => ['index']];
           $this->params['breadcrumbs'][] = ['label' => $model->id_banco_movimiento, 'url' => ['view', 'id' => $model->id_banco_movimiento]];
    }

//$this->params['breadcrumbs'][] = ['label' => 'Banco Movimientos', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id_banco_movimiento, 'url' => ['view', 'id' => $model->id_banco_movimiento]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="banco-movimiento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form2', [
        'model' => $model,
    ]) ?>

</div>
