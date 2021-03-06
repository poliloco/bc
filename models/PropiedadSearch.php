<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Propiedad;

/**
 * PropiedadSearch represents the model behind the search form about `app\models\Propiedad`.
 */
class PropiedadSearch extends Propiedad
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_propiedad'], 'integer'],
            [['propiedad', 'cuenta_contable', 'cuenta_ingresos', 'cedula_responsable', 'nombre_responsable', 'telefono_responsable', 'correo_responsable', 'condicion'], 'safe'],
            [['superficie', 'alicuota'], 'number'],
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
        $query = Propiedad::find();

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
            'id_propiedad' => $this->id_propiedad,
            'superficie' => $this->superficie,
            'alicuota' => $this->alicuota,
        ]);

        $query->andFilterWhere(['like', 'propiedad', $this->propiedad])
            ->andFilterWhere(['like', 'cuenta_contable', $this->cuenta_contable])
            ->andFilterWhere(['like', 'cuenta_ingresos', $this->cuenta_ingresos])
            ->andFilterWhere(['like', 'cedula_responsable', $this->cedula_responsable])
            ->andFilterWhere(['like', 'nombre_responsable', $this->nombre_responsable])
            ->andFilterWhere(['like', 'telefono_responsable', $this->telefono_responsable])
            ->andFilterWhere(['like', 'correo_responsable', $this->correo_responsable])
            ->andFilterWhere(['like', 'condicion', $this->condicion]);

        return $dataProvider;
    }
}
