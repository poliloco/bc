<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "familia_integrantes".
 *
 * @property string $id_familia_integrantes
 * @property string $id_familia
 * @property string $cedula
 * @property string $apellido
 * @property string $nombre
 * @property string $fecha_nacimiento
 * @property string $lugar_nacimiento
 * @property string $sexo
 * @property string $parentesco
 * @property string $nivel_instruccion
 * @property string $profesion
 * @property string $trabaja
 * @property string $lugar_trabajo
 * @property double $ingreso_mensual
 * @property string $telefono_cel
 * @property string $estado_civil
 * @property string $correo
 * @property string $foto
 *
 * @property Familia $idFamilia
 */
class FamiliaIntegrantes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'familia_integrantes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_familia', 'cedula', 'apellido', 'nombre', 'profesion', 'ingreso_mensual'], 'required'],
            [['id_familia'], 'integer'],
            [['fecha_nacimiento'], 'safe'],
            [['ingreso_mensual'], 'number'],
            [['cedula'], 'string', 'max' => 10],
            [['apellido', 'nombre', 'correo'], 'string', 'max' => 50],
            [['lugar_nacimiento', 'profesion', 'lugar_trabajo', 'foto'], 'string', 'max' => 100],
            [['sexo'], 'string', 'max' => 1],
            [['parentesco', 'nivel_instruccion', 'estado_civil'], 'string', 'max' => 20],
            [['trabaja'], 'string', 'max' => 2],
            [['telefono_cel'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_familia_integrantes' => 'Id Familia Integrantes',
            'id_familia' => 'Id Familia',
            'cedula' => 'Cedula',
            'apellido' => 'Apellido',
            'nombre' => 'Nombre',
            'fecha_nacimiento' => 'Fecha Nacimiento',
            'lugar_nacimiento' => 'Lugar Nacimiento',
            'sexo' => 'M
F',
            'parentesco' => 'Madre
Padre
Hijo
Tio
Sobrino
Abuelo
Nieto',
            'nivel_instruccion' => 'Primaria
Secundaria
Universitaria
Postgrado',
            'profesion' => 'Profesion',
            'trabaja' => 'Si
No',
            'lugar_trabajo' => 'Publico
Privado
Comercial
Cuenta Propia
Bueneria
Otro',
            'ingreso_mensual' => 'Ingreso Mensual',
            'telefono_cel' => 'Telefono Cel',
            'estado_civil' => 'Soltero
Casado
Union Estable
Divorciado
Viudo',
            'correo' => 'Correo',
            'foto' => 'Foto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdFamilia()
    {
        return $this->hasOne(Familia::className(), ['id_familia' => 'id_familia']);
    }
}
