<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "propiedad_det".
 *
 * @property string $id_propiedad_det
 * @property string $id_propiedad
 * @property string $tipo
 * @property string $terreno_propio
 * @property string $ocv
 * @property string $ambientes
 * @property integer $habitaciones
 * @property string $paredes
 * @property string $techo
 * @property string $enseres
 * @property string $salubridad
 * @property string $plagas
 * @property string $mascotas
 * @property string $servicio_agua
 * @property string $servicio_cloaca
 * @property string $servicio_gas
 * @property string $servicio_electrico
 * @property string $servicio_aseo
 * @property string $servicio_telefonia
 * @property string $servicio_transporte
 * @property string $servicio_infrmacion
 * @property string $servicio_comunal
 *
 * @property Propiedad $idPropiedad
 */
class PropiedadDet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'propiedad_det';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_propiedad', 'tipo', 'habitaciones', 'paredes', 'enseres', 'servicio_aseo', 'servicio_comunal'], 'required'],
            [['id_propiedad', 'habitaciones'], 'integer'],
            [['tipo', 'paredes', 'techo'], 'string', 'max' => 20],
            [['terreno_propio', 'ocv'], 'string', 'max' => 2],
            [['ambientes', 'salubridad', 'plagas', 'mascotas'], 'string', 'max' => 100],
            [['enseres'], 'string', 'max' => 200],
            [['servicio_agua', 'servicio_cloaca', 'servicio_gas', 'servicio_electrico', 'servicio_aseo', 'servicio_telefonia', 'servicio_transporte', 'servicio_infrmacion', 'servicio_comunal'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_propiedad_det' => 'Id Propiedad Det',
            'id_propiedad' => 'Id Propiedad',
            'tipo' => 'Tipo',
            'terreno_propio' => 'Si
No',
            'ocv' => 'Si
No',
            'ambientes' => 'Sala
Comedor
Cocina
Bano',
            'habitaciones' => 'Habitaciones',
            'paredes' => 'Paredes',
            'techo' => 'Platabanda
Asbesto
Tejas
Madera
Zinc
Machienbrado
Raso
Otro',
            'enseres' => 'Enseres',
            'salubridad' => 'Limpia
Sucia
Media Limpia
Media Sucia
Otros',
            'plagas' => 'Moscas
Hormigas
Ratones
Cucarachas
Ciempies
Otros',
            'mascotas' => 'Perro
Gato
Pajaros
Gallinas
Patos
Cochinos
Otros',
            'servicio_agua' => 'Acueducto
Camion
Pila Publica
Rio
Otro',
            'servicio_cloaca' => 'Cloaca
Septico
Letrina
Aire Libre
Bolsas
Otro',
            'servicio_gas' => 'Bombona
Tuberia
No posee',
            'servicio_electrico' => 'Publico
Planta Electrica
No tiene',
            'servicio_aseo' => 'Servicio Aseo',
            'servicio_telefonia' => 'Domiciliario
Celular
Prepago
Centro de Comunicaciones
Otros',
            'servicio_transporte' => 'Propio
Publico
Bestias
Taxi
Otros',
            'servicio_infrmacion' => 'TV
Radio
Prensa
Internet
Alternativos
Otros',
            'servicio_comunal' => 'Servicio Comunal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPropiedad()
    {
        return $this->hasOne(Propiedad::className(), ['id_propiedad' => 'id_propiedad']);
    }
}
