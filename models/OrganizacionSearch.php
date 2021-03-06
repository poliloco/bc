<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Organizacion;

/**
 * OrganizacionSearch represents the model behind the search form about `app\models\Organizacion`.
 */
class OrganizacionSearch extends Organizacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_organizacion'], 'integer'],
            [['razon_social', 'rif', 'estado', 'municipio', 'parroquia', 'sector', 'direccion', 'telefono', 'correo', 'logo', 'condicion'], 'safe'],
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
        $query = Organizacion::find()
	    ->orderBy([
               //'rif'=>SORT_DESC,
               'rif' => SORT_ASC,
        ]);


        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
             ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_organizacion' => $this->id_organizacion,
        ]);

        $query->andFilterWhere(['like', 'razon_social', $this->razon_social])
            ->andFilterWhere(['like', 'rif', $this->rif])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'municipio', $this->municipio])
            ->andFilterWhere(['like', 'parroquia', $this->parroquia])
            ->andFilterWhere(['like', 'sector', $this->sector])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'correo', $this->correo])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'condicion', $this->condicion]);

        return $dataProvider;
    }
}
