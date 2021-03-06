<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Instalaciones;

/**
 * InstalacionesSearch represents the model behind the search form about `app\models\Instalaciones`.
 */
class InstalacionesSearch extends Instalaciones
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_instalaciones', 'capacidad'], 'integer'],
            [['codigo', 'descripcion', 'detalles', 'cuenta_contable', 'condicion'], 'safe'],
            [['alquiler'], 'number'],
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
        $query = Instalaciones::find();

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
            'id_instalaciones' => $this->id_instalaciones,
            'capacidad' => $this->capacidad,
            'alquiler' => $this->alquiler,
        ]);

        $query->andFilterWhere(['like', 'codigo', $this->codigo])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'detalles', $this->detalles])
            ->andFilterWhere(['like', 'cuenta_contable', $this->cuenta_contable])
            ->andFilterWhere(['like', 'condicion', $this->condicion]);

        return $dataProvider;
    }
}
