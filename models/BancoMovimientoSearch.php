<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BancoMovimiento;

/**
 * BancoMovimientoSearch represents the model behind the search form about `app\models\BancoMovimiento`.
 */
class BancoMovimientoSearch extends BancoMovimiento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_banco_movimiento'], 'integer'],
            [['cuenta_banco', 'referencia', 'periodo', 'fecha_movimiento', 'fecha_registro', 'tipo', 'persona', 'concepto', 'conciliado', 'condicion'], 'safe'],
            [['cargo', 'abono'], 'number'],
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
        $query = BancoMovimiento::find()
	    ->orderBy([
               'fecha_registro'=>SORT_DESC,
               //'fecha_registro' => SORT_ASC,
        ]);

        $query1 = BancoMovimiento::find()->where(['tipo' => 'Deposito'])->andwhere(['tipo' => 'Transferencia'])
	    ->orderBy([
               'fecha_registro'=>SORT_DESC,
               //'fecha_registro' => SORT_ASC,
        ]);



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
            'id_banco_movimiento' => $this->id_banco_movimiento,
            'fecha_movimiento' => $this->fecha_movimiento,
            'fecha_registro' => $this->fecha_registro,
            'cargo' => $this->cargo,
            'abono' => $this->abono,
        ]);

        $query->andFilterWhere(['like', 'cuenta_banco', $this->cuenta_banco])
            ->andFilterWhere(['like', 'referencia', $this->referencia])
            ->andFilterWhere(['like', 'periodo', $this->periodo])
            ->andFilterWhere(['like', 'tipo', $this->tipo])
            ->andFilterWhere(['like', 'persona', $this->persona])
            ->andFilterWhere(['like', 'concepto', $this->concepto])
            ->andFilterWhere(['like', 'conciliado', $this->conciliado])
            ->andFilterWhere(['like', 'condicion', $this->condicion]);

        return $dataProvider;
    }

    public function search0($params)
    {
        $query0 = BancoMovimiento::find()->where(['tipo' => 'Cheque'])
	    ->orderBy([
               'fecha_registro'=>SORT_DESC,
               //'fecha_registro' => SORT_ASC,
        ]);


        $dataProvider0 = new ActiveDataProvider([
            'query' => $query0,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider0;
        }

        $query0->andFilterWhere([
            'id_banco_movimiento' => $this->id_banco_movimiento,
            'fecha_movimiento' => $this->fecha_movimiento,
            'fecha_registro' => $this->fecha_registro,
            'cargo' => $this->cargo,
            'abono' => $this->abono,
        ]);

        $query0->andFilterWhere(['like', 'cuenta_banco', $this->cuenta_banco])
            ->andFilterWhere(['like', 'referencia', $this->referencia])
            ->andFilterWhere(['like', 'periodo', $this->periodo])
            ->andFilterWhere(['like', 'tipo', $this->tipo])
            ->andFilterWhere(['like', 'persona', $this->persona])
            ->andFilterWhere(['like', 'concepto', $this->concepto])
            ->andFilterWhere(['like', 'conciliado', $this->conciliado])
            ->andFilterWhere(['like', 'condicion', $this->condicion]);

        return $dataProvider0;
    }

    public function search1($params)
    {
        $query1 = BancoMovimiento::find()->where(['tipo' => 'Deposito'])->orwhere(['tipo' => 'Transferencia'])
	    ->orderBy([
               'fecha_registro'=>SORT_DESC,
               //'fecha_registro' => SORT_ASC,
        ]);

        $dataProvider1 = new ActiveDataProvider([
            'query' => $query1,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider1;
        }

        $query1->andFilterWhere([
            'id_banco_movimiento' => $this->id_banco_movimiento,
            'fecha_movimiento' => $this->fecha_movimiento,
            'fecha_registro' => $this->fecha_registro,
            'cargo' => $this->cargo,
            'abono' => $this->abono,
        ]);

        $query1->andFilterWhere(['like', 'cuenta_banco', $this->cuenta_banco])
            ->andFilterWhere(['like', 'referencia', $this->referencia])
            ->andFilterWhere(['like', 'periodo', $this->periodo])
            ->andFilterWhere(['like', 'tipo', $this->tipo])
            ->andFilterWhere(['like', 'persona', $this->persona])
            ->andFilterWhere(['like', 'concepto', $this->concepto])
            ->andFilterWhere(['like', 'conciliado', $this->conciliado])
            ->andFilterWhere(['like', 'condicion', $this->condicion]);

        return $dataProvider1;
    }

}
