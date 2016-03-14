<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "auditoria".
 *
 * @property string $id
 * @property string $user
 * @property string $modelo
 * @property string $accion
 * @property string $fechahora
 */
class Auditoria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'auditoria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user', 'modelo', 'accion', 'fechahora'], 'required'],
            [['fechahora'], 'safe'],
            [['user', 'modelo', 'accion'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'User',
            'modelo' => 'Modelo',
            'accion' => 'Accion',
            'fechahora' => 'Fechahora',
        ];
    }
}
