<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diario_det".
 *
 * @property string $id_diario_det
 * @property string $id_diario
 * @property string $cuenta
 * @property double $debe
 * @property double $haber
 *
 * @property Diario $idDiario
 */
class DiarioDet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diario_det';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_diario', 'cuenta'], 'required'],
            [['id_diario'], 'integer'],
            [['debe', 'haber'], 'number'],
            [['cuenta'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_diario_det' => 'Id Diaro Det',
            'id_diario' => 'Id Diario',
            'cuenta' => 'Cuenta',
            'debe' => 'Debe',
            'haber' => 'Haber',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDiario()
    {
        return $this->hasOne(Diario::className(), ['id_diario' => 'id_diario']);
    }
}
