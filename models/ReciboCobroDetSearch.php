<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReciboCobroDet;

/**
 * ReciboCobroDetSearch represents the model behind the search form about `app\models\ReciboCobroDet`.
 */
class ReciboCobroDetSearch extends ReciboCobroDet
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_recibo_cobro_det', 'id_recibo_cobro'], 'integer'],
            [['concepto', 'proveedor', 'factura'], 'safe'],
            [['monto'], 'number'],
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
        $query = ReciboCobroDet::find()->where(['id_recibo_cobro' => $id]);

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
            'id_recibo_cobro_det' => $this->id_recibo_cobro_det,
            'id_recibo_cobro' => $this->id_recibo_cobro,
            'monto' => $this->monto,
        ]);

        $query->andFilterWhere(['like', 'concepto', $this->concepto])
            ->andFilterWhere(['like', 'proveedor', $this->proveedor])
            ->andFilterWhere(['like', 'factura', $this->factura]);

        return $dataProvider;
    }
}
