<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PropiedadDet;

/**
 * PropiedadDetSearch represents the model behind the search form about `app\models\PropiedadDet`.
 */
class PropiedadDetSearch extends PropiedadDet
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_propiedad_det', 'id_propiedad', 'habitaciones'], 'integer'],
            [['tipo', 'terreno_propio', 'ocv', 'ambientes', 'paredes', 'techo', 'enseres', 'salubridad', 'plagas', 'mascotas', 'servicio_agua', 'servicio_cloaca', 'servicio_gas', 'servicio_electrico', 'servicio_aseo', 'servicio_telefonia', 'servicio_transporte', 'servicio_infrmacion', 'servicio_comunal'], 'safe'],
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
        $query = PropiedadDet::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 30,
             ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_propiedad_det' => $this->id_propiedad_det,
            'id_propiedad' => $this->id_propiedad,
            'habitaciones' => $this->habitaciones,
        ]);

        $query->andFilterWhere(['like', 'tipo', $this->tipo])
            ->andFilterWhere(['like', 'terreno_propio', $this->terreno_propio])
            ->andFilterWhere(['like', 'ocv', $this->ocv])
            ->andFilterWhere(['like', 'ambientes', $this->ambientes])
            ->andFilterWhere(['like', 'paredes', $this->paredes])
            ->andFilterWhere(['like', 'techo', $this->techo])
            ->andFilterWhere(['like', 'enseres', $this->enseres])
            ->andFilterWhere(['like', 'salubridad', $this->salubridad])
            ->andFilterWhere(['like', 'plagas', $this->plagas])
            ->andFilterWhere(['like', 'mascotas', $this->mascotas])
            ->andFilterWhere(['like', 'servicio_agua', $this->servicio_agua])
            ->andFilterWhere(['like', 'servicio_cloaca', $this->servicio_cloaca])
            ->andFilterWhere(['like', 'servicio_gas', $this->servicio_gas])
            ->andFilterWhere(['like', 'servicio_electrico', $this->servicio_electrico])
            ->andFilterWhere(['like', 'servicio_aseo', $this->servicio_aseo])
            ->andFilterWhere(['like', 'servicio_telefonia', $this->servicio_telefonia])
            ->andFilterWhere(['like', 'servicio_transporte', $this->servicio_transporte])
            ->andFilterWhere(['like', 'servicio_infrmacion', $this->servicio_infrmacion])
            ->andFilterWhere(['like', 'servicio_comunal', $this->servicio_comunal]);

        return $dataProvider;
    }
}
