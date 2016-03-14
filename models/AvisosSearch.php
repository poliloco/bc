<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Avisos;

/**
 * AvisosSearch represents the model behind the search form about `app\models\Avisos`.
 */
class AvisosSearch extends Avisos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_avisos'], 'integer'],
            [['titulo', 'contenido', 'fecha', 'condicion'], 'safe'],
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
        $query = Avisos::find()
	    ->orderBy([
               'id_avisos'=>SORT_DESC,
               //'id_avisos' => SORT_ASC,
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
            'id_avisos' => $this->id_avisos,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'titulo', $this->titulo])
            ->andFilterWhere(['like', 'contenido', $this->contenido])
            ->andFilterWhere(['like', 'condicion', $this->condicion]);

        return $dataProvider;
    }
}
