<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "facturas".
 *
 * @property string $id_facturas
 * @property string $numero
 * @property string $control
 * @property string $fecha
 * @property string $proveedor
 * @property string $concepto
 * @property double $monto
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
            [['numero', 'control', 'fecha', 'proveedor', 'concepto', 'monto'], 'required'],
            [['fecha', 'fecha_registro', 'fecha_modificacion'], 'safe'],
            [['monto'], 'number'],
            [['numero', 'control'], 'string', 'max' => 10],
            [['proveedor'], 'string', 'max' => 100],
            [['concepto'], 'string', 'max' => 200],
            [['condicion'], 'string', 'max' => 20]
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
            'fecha' => 'Fecha',
            'proveedor' => 'Proveedor',
            'concepto' => 'Concepto',
            'monto' => 'Monto',
            'condicion' => 'Condicion',
            'fecha_registro' => 'Fecha Registro',
            'fecha_modificacion' => 'Fecha Modificacion',
        ];
    }
}
