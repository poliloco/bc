<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Comentarios;

/**
 * ComentariosSearch represents the model behind the search form about `app\models\Comentarios`.
 */
class ComentariosSearch extends Comentarios
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_comentarios'], 'integer'],
            [['familia', 'comentario', 'aprobado', 'fecha_registro', 'fecha_aprobacion'], 'safe'],
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
        $query = Comentarios::find();

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
            'id_comentarios' => $this->id_comentarios,
            'fecha_registro' => $this->fecha_registro,
            'fecha_aprobacion' => $this->fecha_aprobacion,
        ]);

        $query->andFilterWhere(['like', 'familia', $this->familia])
            ->andFilterWhere(['like', 'comentario', $this->comentario])
            ->andFilterWhere(['like', 'aprobado', $this->aprobado]);

        return $dataProvider;
    }
}
