<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reservacion".
 *
 * @property string $id_reservacion
 * @property string $instalacion
 * @property string $fecha_reserva
 * @property string $familia
 * @property string $motivo
 * @property string $responsable_reserva
 * @property string $fecha_registro
 * @property string $aprobado
 * @property string $fecha_aprobacion
 * @property string $responsable_aprobacion
 */
class Reservacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reservacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['instalacion', 'fecha_reserva', 'familia'], 'required'],
            [['fecha_reserva', 'fecha_registro', 'fecha_aprobacion'], 'safe'],
            [['instalacion', 'motivo'], 'string', 'max' => 250],
            [['familia', 'responsable_reserva', 'responsable_aprobacion'], 'string', 'max' => 50],
            [['aprobado'], 'string', 'max' => 2]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_reservacion' => 'Id Reservacion',
            'instalacion' => 'Instalacion',
            'fecha_reserva' => 'Fecha Reserva',
            'familia' => 'Familia',
            'motivo' => 'Motivo',
            'responsable_reserva' => 'Resp. Reserva',
            'fecha_registro' => 'Fecha Registro',
            'aprobado' => 'Aprobado',
            'fecha_aprobacion' => 'Fecha Aprobacion',
            'responsable_aprobacion' => 'Resp. Aprobacion',
        ];
    }
}
