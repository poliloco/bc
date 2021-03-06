<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Banco;

/**
 * BancoSearch represents the model behind the search form about `app\models\Banco`.
 */
class BancoSearch extends Banco
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_banco'], 'integer'],
            [['banco', 'cuenta_banco', 'nombre', 'fecha_apertura', 'fecha_cierre', 'cuenta_contable', 'condicion'], 'safe'],
            [['saldo'], 'number'],
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
        $query = Banco::find()
	    ->orderBy([
               //'cuenta_banco'=>SORT_DESC,
               'cuenta_banco' => SORT_ASC,
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
            'id_banco' => $this->id_banco,
            'fecha_apertura' => $this->fecha_apertura,
            'fecha_cierre' => $this->fecha_cierre,
            'saldo' => $this->saldo,
        ]);

        $query->andFilterWhere(['like', 'banco', $this->banco])
            ->andFilterWhere(['like', 'cuenta_banco', $this->cuenta_banco])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'cuenta_contable', $this->cuenta_contable])
            ->andFilterWhere(['like', 'condicion', $this->condicion]);

        return $dataProvider;
    }
}
