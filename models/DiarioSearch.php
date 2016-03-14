<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Diario;

/**
 * DiarioSearch represents the model behind the search form about `app\models\Diario`.
 */
class DiarioSearch extends Diario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_diario'], 'integer'],
            [['aniomes', 'fecha', 'descripcion', 'condicion'], 'safe'],
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
        $query = Diario::find()
	    ->orderBy([
               //'fecha'=>SORT_DESC,
               'fecha' => SORT_ASC,
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
            'id_diario' => $this->id_diario,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'aniomes', $this->aniomes])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'condicion', $this->condicion]);

        return $dataProvider;
    }
}
