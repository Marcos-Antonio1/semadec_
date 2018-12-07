<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Esporte;

/**
 * EsporteSearch represents the model behind the search form of `app\models\Esporte`.
 */
class EsporteSearch extends Esporte
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idEsporte', 'quantidade_max', 'quantidade_min'], 'integer'],
            [['categoria', 'modalidade'], 'safe'],
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
        $query = Esporte::find();

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
            'idEsporte' => $this->idEsporte,
            'quantidade_max' => $this->quantidade_max,
            'quantidade_min' => $this->quantidade_min,
        ]);

        $query->andFilterWhere(['like', 'categoria', $this->categoria])
            ->andFilterWhere(['like', 'modalidade', $this->modalidade]);

        return $dataProvider;
    }
}
