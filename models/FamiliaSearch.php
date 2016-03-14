<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Familia;

/**
 * FamiliaSearch represents the model behind the search form about `app\models\Familia`.
 */
class FamiliaSearch extends Familia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_familia'], 'integer'],
            [['familia', 'propiedad', 'jefe_familia', 'telefono_hab', 'tenencia_propiedad', 'tipo_ingreso', 'desde', 'hasta'], 'safe'],
            [['monto_ingreso'], 'number'],
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
        $query = Familia::find()
	    ->orderBy([
               //'propiedad'=>SORT_DESC,
               'propiedad' => SORT_ASC,
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
            'id_familia' => $this->id_familia,
            'monto_ingreso' => $this->monto_ingreso,
            'desde' => $this->desde,
            'hasta' => $this->hasta,
        ]);

        $query->andFilterWhere(['like', 'familia', $this->familia])
            ->andFilterWhere(['like', 'propiedad', $this->propiedad])
            ->andFilterWhere(['like', 'jefe_familia', $this->jefe_familia])
            ->andFilterWhere(['like', 'telefono_hab', $this->telefono_hab])
            ->andFilterWhere(['like', 'tenencia_propiedad', $this->tenencia_propiedad])
            ->andFilterWhere(['like', 'tipo_ingreso', $this->tipo_ingreso]);

        return $dataProvider;
    }
}
