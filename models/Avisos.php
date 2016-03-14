<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "avisos".
 *
 * @property string $id_avisos
 * @property string $titulo
 * @property string $contenido
 * @property string $fecha
 * @property string $condicion
 */
class Avisos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'avisos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'contenido'], 'required'],
            [['contenido'], 'string'],
            [['fecha'], 'safe'],
            [['titulo'], 'string', 'max' => 20],
            [['condicion'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_avisos' => 'Id Avisos',
            'titulo' => 'Titulo',
            'contenido' => 'Contenido',
            'fecha' => 'Fecha',
            'condicion' => 'Condicion',
        ];
    }
}
