<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FamiliaIntegrantes;

/**
 * FamiliaIntegrantesSearch represents the model behind the search form about `app\models\FamiliaIntegrantes`.
 */
class FamiliaIntegrantesSearch extends FamiliaIntegrantes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_familia_integrantes', 'id_familia'], 'integer'],
            [['cedula', 'apellido', 'nombre', 'fecha_nacimiento', 'lugar_nacimiento', 'sexo', 'parentesco', 'nivel_instruccion', 'profesion', 'trabaja', 'lugar_trabajo', 'telefono_cel', 'estado_civil', 'correo', 'foto'], 'safe'],
            [['ingreso_mensual'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = FamiliaIntegrantes::find()
	    ->orderBy([
               //'cedula'=>SORT_DESC,
               'cedula' => SORT_ASC,
        ]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
             ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_familia_integrantes' => $this->id_familia_integrantes,
            'id_familia' => $this->id_familia,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'ingreso_mensual' => $this->ingreso_mensual,
        ]);

        $query->andFilterWhere(['like', 'cedula', $this->cedula])
            ->andFilterWhere(['like', 'apellido', $this->apellido])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'lugar_nacimiento', $this->lugar_nacimiento])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'parentesco', $this->parentesco])
            ->andFilterWhere(['like', 'nivel_instruccion', $this->nivel_instruccion])
            ->andFilterWhere(['like', 'profesion', $this->profesion])
            ->andFilterWhere(['like', 'trabaja', $this->trabaja])
            ->andFilterWhere(['like', 'lugar_trabajo', $this->lugar_trabajo])
            ->andFilterWhere(['like', 'telefono_cel', $this->telefono_cel])
            ->andFilterWhere(['like', 'estado_civil', $this->estado_civil])
            ->andFilterWhere(['like', 'correo', $this->correo])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
