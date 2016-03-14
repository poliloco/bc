<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "votacion".
 *
 * @property string $id_votacion
 * @property string $proyecto
 * @property string $familia
 * @property string $voto
 * @property string $fecha_voto
 */
class Votacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'votacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['proyecto', 'familia', 'voto'], 'required'],
            [['fecha_voto'], 'safe'],
            [['proyecto'], 'string', 'max' => 100],
            [['familia'], 'string', 'max' => 50],
            [['voto'], 'string', 'max' => 2],
            [['proyecto', 'familia'], 'unique', 'targetAttribute' => ['proyecto', 'familia'], 'message' => 'La Combinacion de Proyecto y Familia ya existe.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_votacion' => 'Id Votacion',
            'proyecto' => 'Proyecto',
            'familia' => 'Familia',
            'voto' => 'Voto',
            'fecha_voto' => 'Fecha Voto',
        ];
    }
}
