<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DiarioDet;

/**
 * DiarioDetSearch represents the model behind the search form about `app\models\DiarioDet`.
 */
class DiarioDetSearch extends DiarioDet
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_diario_det', 'id_diario'], 'integer'],
            [['cuenta'], 'safe'],
            [['debe', 'haber'], 'number'],
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
$id = $_GET['id'];
        $query = DiarioDet::find()->where(['id_diario' => $id]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_diario_det' => $this->id_diario_det,
            'id_diario' => $this->id_diario,
            'debe' => $this->debe,
            'haber' => $this->haber,
        ]);

        $query->andFilterWhere(['like', 'cuenta', $this->cuenta]);

        return $dataProvider;
    }
}
