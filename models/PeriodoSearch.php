<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Periodo;

/**
 * PeriodoSearch represents the model behind the search form about `app\models\Periodo`.
 */
class PeriodoSearch extends Periodo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_periodo'], 'integer'],
            [['anio', 'mes', 'aniomes', 'condicion'], 'safe'],
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
        $query = Periodo::find();

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
            'id_periodo' => $this->id_periodo,
        ]);

        $query->andFilterWhere(['like', 'anio', $this->anio])
            ->andFilterWhere(['like', 'mes', $this->mes])
            ->andFilterWhere(['like', 'aniomes', $this->aniomes])
            ->andFilterWhere(['like', 'condicion', $this->condicion]);

        return $dataProvider;
    }
}
