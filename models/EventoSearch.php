<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Evento;

/**
 * EventoSearch represents the model behind the search form of `app\models\Evento`.
 */
class EventoSearch extends Evento
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idevento', 'horascurriculares', 'semadec_idSemadec', 'max_usuarios'], 'integer'],
            [['Tema', 'descricao', 'data', 'tipo', 'hora_inicio', 'hora_fim'], 'safe'],
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
        $query = Evento::find();

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
            'idevento' => $this->idevento,
            'data' => $this->data,
            'horascurriculares' => $this->horascurriculares,
            'semadec_idSemadec' => $this->semadec_idSemadec,
            'hora_inicio' => $this->hora_inicio,
            'hora_fim' => $this->hora_fim,
            'max_usuarios' => $this->max_usuarios,
        ]);

        $query->andFilterWhere(['like', 'Tema', $this->Tema])
            ->andFilterWhere(['like', 'descricao', $this->descricao])
            ->andFilterWhere(['like', 'tipo', $this->tipo]);

        return $dataProvider;
    }
}
