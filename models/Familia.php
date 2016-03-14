<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "familia".
 *
 * @property string $id_familia
 * @property string $familia
 * @property string $propiedad
 * @property string $jefe_familia
 * @property string $telefono_hab
 * @property string $tenencia_propiedad
 * @property string $tipo_ingreso
 * @property double $monto_ingreso
 * @property string $desde
 * @property string $hasta
 *
 * @property FamiliaIntegrantes[] $familiaIntegrantes
 */
class Familia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'familia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['familia', 'propiedad', 'jefe_familia', 'tenencia_propiedad'], 'required'],
            [['monto_ingreso'], 'number'],
            [['desde', 'hasta'], 'safe'],
            [['familia', 'jefe_familia', 'tenencia_propiedad'], 'string', 'max' => 100],
            [['propiedad'], 'string', 'max' => 10],
            [['telefono_hab'], 'string', 'max' => 15],
            [['tipo_ingreso'], 'string', 'max' => 20],
            [['familia', 'propiedad', 'jefe_familia'], 'unique', 'targetAttribute' => ['familia', 'propiedad', 'jefe_familia'], 'message' => 'The combination of Familia, Propiedad and Jefe Familia has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_familia' => 'Id Familia',
            'familia' => 'Familia',
            'propiedad' => 'Propiedad',
            'jefe_familia' => 'Jefe Familia',
            'telefono_hab' => 'Telefono Hab',
            'tenencia_propiedad' => 'Tenencia Propiedad',
            'tipo_ingreso' => 'Tipo Ingreso',
            'monto_ingreso' => 'Monto Ingreso',
            'desde' => 'Desde',
            'hasta' => 'Hasta',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFamiliaIntegrantes()
    {
        return $this->hasMany(FamiliaIntegrantes::className(), ['id_familia' => 'id_familia']);
    }
}
