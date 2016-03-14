<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banco".
 *
 * @property string $id_banco
 * @property string $banco
 * @property string $cuenta_banco
 * @property string $nombre
 * @property string $fecha_apertura
 * @property string $fecha_cierre
 * @property double $saldo
 * @property string $cuenta_contable
 * @property string $condicion
 */
class Banco extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banco';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['banco', 'cuenta_banco', 'nombre', 'fecha_apertura', 'saldo', 'cuenta_contable'], 'required'],
            [['fecha_apertura', 'fecha_cierre'], 'safe'],
            [['saldo'], 'number'],
            [['banco'], 'string', 'max' => 50],
            [['cuenta_banco'], 'string', 'max' => 20],
            [['nombre'], 'string', 'max' => 100],
            [['cuenta_contable'], 'string', 'max' => 15],
            [['condicion'], 'string', 'max' => 10],
            [['cuenta_banco'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_banco' => 'Id Banco',
            'banco' => 'Banco',
            'cuenta_banco' => 'Cuenta Banco',
            'nombre' => 'Nombre',
            'fecha_apertura' => 'Fecha Apertura',
            'fecha_cierre' => 'Fecha Cierre',
            'saldo' => 'Saldo',
            'cuenta_contable' => 'Cuenta Contable',
            'condicion' => 'Condicion',
        ];
    }
}
