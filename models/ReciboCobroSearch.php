<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReciboCobro;

/**
 * ReciboCobroSearch represents the model behind the search form about `app\models\ReciboCobro`.
 */
class ReciboCobroSearch extends ReciboCobro
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_recibo_cobro'], 'integer'],
            [['periodo', 'propiedad', 'cedula_responsable', 'nombre_responsable', 'fecha_registro', 'fecha_pago', 'fecha_acreditacion', 'condicion'], 'safe'],
            [['alicuota', 'monto', 'abono'], 'number'],
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
        $query = ReciboCobro::find();

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
            'id_recibo_cobro' => $this->id_recibo_cobro,
            'alicuota' => $this->alicuota,
            'monto' => $this->monto,
            'abono' => $this->abono,
            'fecha_registro' => $this->fecha_registro,
            'fecha_pago' => $this->fecha_pago,
            'fecha_acreditacion' => $this->fecha_acreditacion,
            'condicion' => $this->condicion,
        ]);

        $query->andFilterWhere(['like', 'periodo', $this->periodo])
            ->andFilterWhere(['like', 'propiedad', $this->propiedad])
            ->andFilterWhere(['like', 'cedula_responsable', $this->cedula_responsable])
            ->andFilterWhere(['like', 'nombre_responsable', $this->nombre_responsable]);

        return $dataProvider;
    }

    public function search1($params)
    {
        $query1 = ReciboCobro::find()->where(['propiedad'=> Yii::$app->user->identity->propiedad]);

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
            'id_recibo_cobro' => $this->id_recibo_cobro,
            'alicuota' => $this->alicuota,
            'monto' => $this->monto,
            'abono' => $this->abono,
            'fecha_registro' => $this->fecha_registro,
            'fecha_pago' => $this->fecha_pago,
            'fecha_acreditacion' => $this->fecha_acreditacion,
            'condicion' => $this->condicion,
        ]);

        $query1->andFilterWhere(['like', 'periodo', $this->periodo])
            ->andFilterWhere(['like', 'propiedad', $this->propiedad])
            ->andFilterWhere(['like', 'cedula_responsable', $this->cedula_responsable])
            ->andFilterWhere(['like', 'nombre_responsable', $this->nombre_responsable]);

        return $dataProvider1;
    }

}
