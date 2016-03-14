<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "periodo".
 *
 * @property string $id_periodo
 * @property string $anio
 * @property string $mes
 * @property string $aniomes
 * @property string $condicion
 */
class Periodo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'periodo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anio', 'mes'], 'required'],
            [['anio'], 'string', 'max' => 4],
            [['mes', 'condicion'], 'string', 'max' => 10],
            [['aniomes'], 'string', 'max' => 15],
            [['anio', 'mes'], 'unique', 'targetAttribute' => ['anio', 'mes'], 'message' => 'The combination of Anio and Mes has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_periodo' => 'Id Periodo',
            'anio' => 'Anio',
            'mes' => 'Mes',
            'aniomes' => 'Aniomes',
            'condicion' => 'Condicion',
        ];
    }
}
