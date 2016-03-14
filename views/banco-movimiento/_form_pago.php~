<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\BancoMovimiento */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\ArrayHelper;

use app\models\Banco;
$banco=Banco::find()->all();
$listData0=ArrayHelper::map($banco,'cuenta_banco','cuenta_banco');


use app\models\Periodo;
$periodo=Periodo::find()->where(['condicion'=>'Activo'])->all();
$listData1=ArrayHelper::map($periodo,'aniomes','aniomes'); 


$id_recibo_cobro = $_GET['id_recibo_cobro'];
use app\models\ReciboCobro;
$recibocobro=ReciboCobro::find()->where(['id_recibo_cobro'=>$id_recibo_cobro])->all();
//$listData1=ArrayHelper::map($recibocobro,'periodo','periodo');
$propiedad=ReciboCobro::find()->select('propiedad')->where(['id_recibo_cobro'=>$id_recibo_cobro])->scalar();
$periodo=ReciboCobro::find()->select('periodo')->where(['id_recibo_cobro'=>$id_recibo_cobro])->scalar();

?>

<div class="banco-movimiento-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'cuenta_banco')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'cuenta_banco')->dropDownList(
	                                $listData0,
	                                ['prompt'=>'Selecione Cuenta Banco...']) ?>

    <?= $form->field($model, 'referencia')->textInput(['maxlength' => true]) ?>

    <!--<?= $form->field($model, 'periodo')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'periodo')->dropDownList(
	                                $listData1) ?>

    <!--<?= $form->field($model, 'fecha_movimiento')->textInput() ?>-->
<?php
echo '<label>Fecha Movimiento</label>';
echo DatePicker::widget([
    'model' => $model,
    'attribute' => 'fecha_movimiento',
    'name' => 'fecha_movimiento', 
    'value' => date('yyyy-mm-dd', strtotime('-1 days')),
//    'value' => date('d-M-Y', strtotime('-1 days')),
//    'value' => date('d-M-Y'),
    'options' => ['placeholder' => 'Seleccionar Fecha ...'],
    'pluginOptions' => [
//        'format' => 'dd-M-yyyy',
        'format' => 'yyyy-mm-dd',
        'todayHighlight' => true
    ]
]); ?>

    <!--<?= $form->field($model, 'fecha_registro')->textInput() ?>-->

    <!--<?= $form->field($model, 'tipo')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'tipo')->radioList(
                                     ['Deposito'=>'Deposito','Transferencia'=>'Transferencia']) ?>

    <!--<?= $form->field($model, 'persona')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'persona')->dropDownList(
	                                [$propiedad =>$propiedad]) ?>

    <!--<?= $form->field($model, 'concepto')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'concepto')->dropDownList(
	                                [$periodo => $periodo]) ?>

    <!--<?= $form->field($model, 'cargo')->textInput() ?>-->

    <?= $form->field($model, 'abono')->textInput() ?>

    <!--<?= $form->field($model, 'conciliado')->textInput(['maxlength' => true]) ?>-->

    <!--<?= $form->field($model, 'condicion')->textInput(['maxlength' => true]) ?>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
