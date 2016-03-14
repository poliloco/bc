<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "recibo_cobro_det".
 *
 * @property string $id_recibo_cobro_det
 * @property string $id_recibo_cobro
 * @property string $concepto
 * @property string $proveedor
 * @property string $factura
 * @property double $monto
 *
 * @property ReciboCobro $idReciboCobro
 */
class ReciboCobroDet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'recibo_cobro_det';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_recibo_cobro', 'concepto', 'proveedor', 'factura', 'monto'], 'required'],
            [['id_recibo_cobro'], 'integer'],
            [['monto'], 'number'],
            [['concepto', 'proveedor'], 'string', 'max' => 200],
            [['factura'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_recibo_cobro_det' => 'Id Recibo Cobro Det',
            'id_recibo_cobro' => 'Id Recibo Cobro',
            'concepto' => 'Concepto',
            'proveedor' => 'Proveedor',
            'factura' => 'Factura',
            'monto' => 'Monto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdReciboCobro()
    {
        return $this->hasOne(ReciboCobro::className(), ['id_recibo_cobro' => 'id_recibo_cobro']);
    }
}
