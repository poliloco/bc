<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Facturas;

/**
 * FacturasSearch represents the model behind the search form about `app\models\Facturas`.
 */
class FacturasSearch extends Facturas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_facturas'], 'integer'],
            [['numero', 'control', 'periodo', 'fecha', 'proveedor', 'concepto', 'condicion', 'fecha_registro', 'fecha_modificacion'], 'safe'],
            [['monto', 'abono'], 'number'],
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
        $query = Facturas::find()
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
            'id_facturas' => $this->id_facturas,
            'fecha' => $this->fecha,
            'monto' => $this->monto,
            'abono' => $this->abono,
            'fecha_registro' => $this->fecha_registro,
            'fecha_modificacion' => $this->fecha_modificacion,
        ]);

        $query->andFilterWhere(['like', 'numero', $this->numero])
            ->andFilterWhere(['like', 'control', $this->control])
            ->andFilterWhere(['like', 'periodo', $this->periodo])
            ->andFilterWhere(['like', 'proveedor', $this->proveedor])
            ->andFilterWhere(['like', 'concepto', $this->concepto])
            ->andFilterWhere(['like', 'condicion', $this->condicion]);

        return $dataProvider;
    }
}
