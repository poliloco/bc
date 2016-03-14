<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proveedores".
 *
 * @property string $id_proveedor
 * @property string $rif
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $correo
 * @property string $cuenta_contable
 * @property string $cuenta_egresos
 * @property string $condicion
 */
class Proveedores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proveedores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rif', 'nombre', 'direccion', 'cuenta_contable', 'cuenta_egresos'], 'required'],
            [['rif', 'telefono', 'cuenta_contable', 'cuenta_egresos'], 'string', 'max' => 15],
            [['nombre', 'correo'], 'string', 'max' => 100],
            [['direccion'], 'string', 'max' => 200],
            [['condicion'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_proveedor' => 'Id Proveedor',
            'rif' => 'Rif',
            'nombre' => 'Nombre',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'correo' => 'Correo',
            'cuenta_contable' => 'Cuenta Contable',
            'cuenta_egresos' => 'Cuenta Egresos',
            'condicion' => 'Condicion',
        ];
    }
}
