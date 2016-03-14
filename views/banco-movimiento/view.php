<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BancoMovimiento */

$this->title = $model->id_banco_movimiento;
switch ($model->tipo){
  case 'Cheque': $this->params['breadcrumbs'][] = ['label' => 'Banco Cheques', 'url' => ['index-cheque']];
                 break;
  case 'Deposito': $this->params['breadcrumbs'][] = ['label' => 'Banco Depositos', 'url' => ['index-deposito']];
                   break;
  case 'Trasferencia': $this->params['breadcrumbs'][] = ['label' => 'Banco Depositos', 'url' => ['index-deposito']];
                       break;
  default: $this->params['breadcrumbs'][] = ['label' => 'Banco Movimientos', 'url' => ['index']];
    }

//$this->params['breadcrumbs'][] = ['label' => 'Banco Movimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banco-movimiento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!--<?= Html::a('Actualizar', ['update', 'id' => $model->id_banco_movimiento], ['class' => 'btn btn-primary']) ?>-->
<?php
  if ($model->condicion=='Anulado')
  {?>
  <!--<?= Html::a('Actualizar', ['update', 'id' => $model->id_banco_movimiento], ['class' => 'btn btn-primary']) ?>-->
  <!--<?= Html::a('Borrar', ['delete', 'id' => $model->id_banco_movimiento], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta Seguro que quiere borrar este item?',
                'method' => 'post',
            ],
        ]) ?>-->
  <?php }
  else
  {?>
    <div style="float: left">
    <?= Html::a('Actualizar', ['update', 'id' => $model->id_banco_movimiento], ['class' => 'btn btn-primary']) ?>
    </div>
    <div style="float: right">
    <?= Html::a('Anular', ['anular', 'id' => $model->id_banco_movimiento], ['class' => 'btn btn-warning']) ?>
    </div>
  <?php } ?>
    <br>
    <br>  
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_banco_movimiento',
            'cuenta_banco',
            'referencia',
            'periodo',
            'fecha_movimiento',
            'fecha_registro',
            'tipo',
            'persona',
            'concepto',
            'cargo',
            'abono',
            'conciliado',
            'condicion',
        ],
    ]) ?>

</div>
