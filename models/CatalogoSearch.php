<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Catalogo;

/**
 * CatalogoSearch represents the model behind the search form about `app\models\Catalogo`.
 */
class CatalogoSearch extends Catalogo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_catalogo', 'nivel'], 'integer'],
            [['cuenta_contable', 'descripcion', 'condicion'], 'safe'],
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
        $query = Catalogo::find()
	    ->orderBy([
               //'cuenta_contable'=>SORT_DESC,
               'cuenta_contable' => SORT_ASC,
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
            'id_catalogo' => $this->id_catalogo,
            'nivel' => $this->nivel,
        ]);

        $query->andFilterWhere(['like', 'cuenta_contable', $this->cuenta_contable])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'condicion', $this->condicion]);

        return $dataProvider;
    }
}
