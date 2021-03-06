<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banco_movimiento".
 *
 * @property string $id_banco_movimiento
 * @property string $cuenta_banco
 * @property string $referencia
 * @property string $periodo
 * @property string $fecha_movimiento
 * @property string $fecha_registro
 * @property string $tipo
 * @property string $persona
 * @property string $concepto
 * @property double $cargo
 * @property double $abono
 * @property string $conciliado
 * @property string $condicion
 */
class BancoMovimiento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banco_movimiento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cuenta_banco', 'referencia', 'periodo', 'fecha_movimiento', 'persona', 'concepto'], 'required'],
            [['fecha_movimiento', 'fecha_registro'], 'safe'],
            [['cargo', 'abono'], 'number'],
            [['cuenta_banco', 'tipo', 'condicion'], 'string', 'max' => 20],
            [['referencia'], 'string', 'max' => 10],
            [['periodo'], 'string', 'max' => 15],
            [['persona'], 'string', 'max' => 100],
            [['concepto'], 'string', 'max' => 200],
            [['conciliado'], 'string', 'max' => 2]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_banco_movimiento' => 'Id Banco Movimiento',
            'cuenta_banco' => 'Cuenta Banco',
            'referencia' => 'Referencia',
            'periodo' => 'Periodo',
            'fecha_movimiento' => 'Fecha Movimiento',
            'fecha_registro' => 'Fecha Registro',
            'tipo' => 'Tipo',
            'persona' => 'Persona',
            'concepto' => 'Concepto',
            'cargo' => 'Cargo',
            'abono' => 'Abono',
            'conciliado' => 'Conciliado',
            'condicion' => 'Condicion',
        ];
    }
}
