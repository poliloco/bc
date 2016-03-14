<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "propiedad".
 *
 * @property string $id_propiedad
 * @property string $propiedad
 * @property double $superficie
 * @property double $alicuota
 * @property string $cuenta_contable
 * @property string $cuenta_ingresos
 * @property string $cedula_responsable 
 * @property string $nombre_responsable 
 * @property string $telefono_responsable 
 * @property string $correo_responsable 
 * @property string $condicion
 *
 * @property PropiedadDet[] $propiedadDets
 */
class Propiedad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'propiedad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['propiedad', 'cuenta_contable', 'cuenta_ingresos', 'cedula_responsable', 'nombre_responsable'], 'required'],
            [['superficie', 'alicuota'], 'number'],
            [['propiedad', 'condicion'], 'string', 'max' => 10],
            [['cuenta_contable', 'cuenta_ingresos', 'cedula_responsable', 'telefono_responsable'], 'string', 'max' => 15],
            [['nombre_responsable', 'correo_responsable'], 'string', 'max' => 100],
            [['propiedad'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_propiedad' => 'Id Propiedad',
            'propiedad' => 'Propiedad',
            'superficie' => 'Superficie',
            'alicuota' => 'Alicuota',
            'cuenta_contable' => 'Cuenta Contable',
            'cuenta_ingresos' => 'Cuenta Ingresos',
            'condicion' => 'Condicion',
            'cedula_responsable' => 'Cedula Responsable',
            'nombre_responsable' => 'Nombre Responsable',
            'telefono_responsable' => 'Telefono Responsable',
            'correo_responsable' => 'Correo Responsable',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropiedadDets()
    {
        return $this->hasMany(PropiedadDet::className(), ['id_propiedad' => 'id_propiedad']);
    }
}
