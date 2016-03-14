<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catalogo".
 *
 * @property string $id_catalogo
 * @property string $cuenta_contable
 * @property string $descripcion
 * @property integer $nivel
 * @property string $condicion
 */
class Catalogo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'catalogo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cuenta_contable', 'descripcion', 'nivel'], 'required'],
            [['nivel'], 'integer'],
            [['cuenta_contable'], 'string', 'max' => 15],
            [['descripcion'], 'string', 'max' => 200],
            [['condicion'], 'string', 'max' => 10],
            [['cuenta_contable'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_catalogo' => 'Id Catalogo',
            'cuenta_contable' => 'Cuenta Contable',
            'descripcion' => 'Descripcion',
            'nivel' => 'Nivel',
            'condicion' => 'Condicion',
        ];
    }
}
