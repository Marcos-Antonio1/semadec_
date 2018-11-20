<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TimeCampeonato;

/**
 * TimecampeonatoSeach represents the model behind the search form of `app\models\TimeCampeonato`.
 */
class TimecampeonatoSeach extends TimeCampeonato
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idTime', 'idCampeonato', 'pontos', 'vitorias', 'derrotas'], 'integer'],
            [['grupos'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = TimeCampeonato::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idTime' => $this->idTime,
            'idCampeonato' => $this->idCampeonato,
            'pontos' => $this->pontos,
            'vitorias' => $this->vitorias,
            'derrotas' => $this->derrotas,
        ]);

        $query->andFilterWhere(['like', 'grupos', $this->grupos]);

        return $dataProvider;
    }
}
