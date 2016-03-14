<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "recibo_cobro".
 *
 * @property string $id_recibo_cobro
 * @property string $periodo
 * @property string $propiedad
 * @property double $alicuota
 * @property string $cedula_responsable
 * @property string $nombre_responsable
 * @property double $monto
 * @property double $abono
 * @property string $fecha_registro
 * @property string $fecha_pago
 * @property string $fecha_acreditacion
 * @property string $condicion
 *
 * @property ReciboCobroDet[] $reciboCobroDets
 */
class ReciboCobro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'recibo_cobro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['periodo', 'propiedad', 'alicuota', 'cedula_responsable', 'nombre_responsable', 'monto', 'fecha_registro'], 'required'],
            [['alicuota', 'monto', 'abono'], 'number'],
            [['fecha_registro', 'fecha_pago', 'fecha_acreditacion'], 'safe'],
            [['cedula_responsable', 'condicion'], 'string', 'max' => 15],
            [['periodo'], 'string', 'max' => 25],
            [['propiedad'], 'string', 'max' => 10],
            [['nombre_responsable'], 'string', 'max' => 100],
            [['periodo', 'propiedad'], 'unique', 'targetAttribute' => ['periodo', 'propiedad'], 'message' => 'The combination of Periodo and Propiedad has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_recibo_cobro' => 'Id',
            'periodo' => 'Periodo',
            'propiedad' => 'Propiedad',
            'alicuota' => 'Alicuota',
            'cedula_responsable' => 'Cedula',
            'nombre_responsable' => 'Nombre',
            'monto' => 'Monto',
            'abono' => 'Abono',
            'fecha_registro' => 'Fecha Reg.',
            'fecha_pago' => 'Fecha Pago',
            'fecha_acreditacion' => 'Fecha Acr.',
            'condicion' => 'Condicion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReciboCobroDets()
    {
        return $this->hasMany(ReciboCobroDet::className(), ['id_recibo_cobro' => 'id_recibo_cobro']);
    }
}
