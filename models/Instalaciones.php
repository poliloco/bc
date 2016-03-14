<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instalaciones".
 *
 * @property string $id_instalaciones
 * @property string $codigo
 * @property string $descripcion
 * @property integer $capacidad
 * @property string $detalles
 * @property double $alquiler
 * @property string $cuenta_contable
 * @property string $condicion
 */
class Instalaciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'instalaciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'descripcion', 'capacidad', 'alquiler', 'cuenta_contable'], 'required'],
            [['capacidad'], 'integer'],
            [['detalles'], 'string'],
            [['alquiler'], 'number'],
            [['codigo'], 'string', 'max' => 5],
            [['descripcion'], 'string', 'max' => 250],
            [['cuenta_contable', 'condicion'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_instalaciones' => 'Id Instalaciones',
            'codigo' => 'Codigo',
            'descripcion' => 'Descripcion',
            'capacidad' => 'Capacidad',
            'detalles' => 'Detalles',
            'alquiler' => 'Alquiler',
            'cuenta_contable' => 'Cuenta Contable',
            'condicion' => 'Condicion',
        ];
    }
}
