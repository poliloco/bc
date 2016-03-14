<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "facturas".
 *
 * @property string $id_facturas
 * @property string $numero
 * @property string $control
 * @property string $periodo
 * @property string $fecha
 * @property string $proveedor
 * @property string $concepto
 * @property double $monto
 * @property double $abono
 * @property string $condicion
 * @property string $fecha_registro
 * @property string $fecha_modificacion
 */
class Facturas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'facturas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numero', 'control', 'periodo', 'fecha', 'proveedor', 'concepto', 'monto'], 'required'],
            [['fecha', 'fecha_registro', 'fecha_modificacion'], 'safe'],
            [['monto', 'abono'], 'number'],
            [['numero', 'control'], 'string', 'max' => 10],
            [['periodo'], 'string', 'max' => 15],
            [['proveedor'], 'string', 'max' => 100],
            [['concepto'], 'string', 'max' => 200],
            [['condicion'], 'string', 'max' => 20],
            [['numero', 'proveedor'], 'unique', 'targetAttribute' => ['numero', 'proveedor'], 'message' => 'The combination of Numero and Proveedor has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_facturas' => 'Id Facturas',
            'numero' => 'Numero',
            'control' => 'Control',
            'periodo' => 'Periodo',
            'fecha' => 'Fecha',
            'proveedor' => 'Proveedor',
            'concepto' => 'Concepto',
            'monto' => 'Monto',
            'abono' => 'Abono',
            'condicion' => 'Condicion',
            'fecha_registro' => 'Fecha Registro',
            'fecha_modificacion' => 'Fecha Modificacion',
        ];
    }
}
