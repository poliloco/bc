<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Activos;

/**
 * ActivosSearch represents the model behind the search form about `app\models\Activos`.
 */
class ActivosSearch extends Activos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_activos', 'cantidad'], 'integer'],
            [['codigo', 'descripcion', 'fecha_compra', 'cuenta_contable', 'condicion'], 'safe'],
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
        $query = Activos::find()
	    ->orderBy([
               //'codigo'=>SORT_DESC,
               'codigo' => SORT_ASC,
        ]);

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
            'id_activos' => $this->id_activos,
            'cantidad' => $this->cantidad,
            'costo' => $this->costo,
            'fecha_compra' => $this->fecha_compra,
        ]);

        $query->andFilterWhere(['like', 'codigo', $this->codigo])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'cuenta_contable', $this->cuenta_contable])
            ->andFilterWhere(['like', 'condicion', $this->condicion]);

        return $dataProvider;
    }
}
