<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Proyectos;

/**
 * ProyectosSearch represents the model behind the search form about `app\models\Proyectos`.
 */
class ProyectosSearch extends Proyectos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_proyectos'], 'integer'],
            [['proveedor', 'proyecto', 'descripcion', 'cuenta_contable', 'condicion'], 'safe'],
            [['costo'], 'number'],
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
        $query = Proyectos::find();

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
            'id_proyectos' => $this->id_proyectos,
            'costo' => $this->costo,
        ]);

        $query->andFilterWhere(['like', 'proveedor', $this->proveedor])
            ->andFilterWhere(['like', 'proyecto', $this->proyecto])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'cuenta_contable', $this->cuenta_contable])
            ->andFilterWhere(['like', 'condicion', $this->condicion]);

        return $dataProvider;
    }
}
