<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "activos".
 *
 * @property string $id_activos
 * @property string $codigo
 * @property string $descripcion
 * @property integer $cantidad
 * @property double $costo
 * @property string $fecha_compra
 * @property string $cuenta_contable
 * @property string $condicion
 */
class Activos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'activos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'descripcion', 'cantidad', 'costo', 'fecha_compra', 'cuenta_contable'], 'required'],
            [['cantidad'], 'integer'],
            [['costo'], 'number'],
            [['fecha_compra'], 'safe'],
            [['codigo'], 'string', 'max' => 10],
            [['descripcion'], 'string', 'max' => 200],
            [['cuenta_contable'], 'string', 'max' => 15],
            [['condicion'], 'string', 'max' => 20],
            [['codigo'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_activos' => 'Id Activos',
            'codigo' => 'Codigo',
            'descripcion' => 'Descripcion',
            'cantidad' => 'Cantidad',
            'costo' => 'Costo',
            'fecha_compra' => 'Fecha Compra',
            'cuenta_contable' => 'Cuenta Contable',
            'condicion' => 'Condicion',
        ];
    }
}
