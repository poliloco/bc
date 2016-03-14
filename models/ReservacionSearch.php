<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reservacion;

/**
 * ReservacionSearch represents the model behind the search form about `app\models\Reservacion`.
 */
class ReservacionSearch extends Reservacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_reservacion'], 'integer'],
            [['instalacion', 'fecha_reserva', 'familia', 'motivo', 'responsable_reserva', 'fecha_registro', 'aprobado', 'fecha_aprobacion', 'responsable_aprobacion'], 'safe'],
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
        $query = Reservacion::find();

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
            'id_reservacion' => $this->id_reservacion,
            'fecha_reserva' => $this->fecha_reserva,
            'fecha_registro' => $this->fecha_registro,
            'fecha_aprobacion' => $this->fecha_aprobacion,
        ]);

        $query->andFilterWhere(['like', 'instalacion', $this->instalacion])
            ->andFilterWhere(['like', 'familia', $this->familia])
            ->andFilterWhere(['like', 'motivo', $this->motivo])
            ->andFilterWhere(['like', 'responsable_reserva', $this->responsable_reserva])
            ->andFilterWhere(['like', 'aprobado', $this->aprobado])
            ->andFilterWhere(['like', 'responsable_aprobacion', $this->responsable_aprobacion]);

        return $dataProvider;
    }
}
