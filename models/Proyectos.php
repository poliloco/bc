<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proyectos".
 *
 * @property string $id_proyectos
 * @property string $proveedor
 * @property string $proyecto
 * @property string $descripcion
 * @property double $costo
 * @property string $cuenta_contable
 * @property string $condicion
 */
class Proyectos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proyectos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['proveedor', 'proyecto', 'costo', 'cuenta_contable'], 'required'],
            [['descripcion'], 'string'],
            [['costo'], 'number'],
            [['proveedor'], 'string', 'max' => 50],
            [['proyecto'], 'string', 'max' => 100],
            [['cuenta_contable'], 'string', 'max' => 15],
            [['condicion'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_proyectos' => 'Id Proyectos',
            'proveedor' => 'Proveedor',
            'proyecto' => 'Proyecto',
            'descripcion' => 'Descripcion',
            'costo' => 'Costo',
            'cuenta_contable' => 'Cuenta Contable',
            'condicion' => 'Condicion',
        ];
    }
}
