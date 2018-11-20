<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jogos;

/**
 * JogosSeach represents the model behind the search form of `app\models\Jogos`.
 */
class JogosSeach extends Jogos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idJogos', 'pontos_time_a', 'pontos_time_b', 'colocacao', 'idTime1', 'idTime2', 'campeonato_idCampeonato'], 'integer'],
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
        $query = Jogos::find();

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
            'idJogos' => $this->idJogos,
            'pontos_time_a' => $this->pontos_time_a,
            'pontos_time_b' => $this->pontos_time_b,
            'colocacao' => $this->colocacao,
            'idTime1' => $this->idTime1,
            'idTime2' => $this->idTime2,
            'campeonato_idCampeonato' => $this->campeonato_idCampeonato,
        ]);

        return $dataProvider;
    }
}
