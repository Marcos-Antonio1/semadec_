<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "esporte".
 *
 * @property int $idEsporte
 * @property string $nome
 * @property string $categoria
 * @property string $modalidade
 * @property int $quantidade_max
 * @property int $quantidade_min
 *
 * @property Campeonato[] $campeonatos
 */
class Esporte extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'esporte';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'categoria', 'modalidade', 'quantidade_max', 'quantidade_min'], 'required'],
            [['quantidade_max', 'quantidade_min'], 'integer'],
            [['nome', 'categoria'], 'string', 'max' => 45],
            [['modalidade'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idEsporte' => Yii::t('app', 'Id Esporte'),
            'nome' => Yii::t('app', 'Nome'),
            'categoria' => Yii::t('app', 'Categoria'),
            'modalidade' => Yii::t('app', 'Modalidade'),
            'quantidade_max' => Yii::t('app', 'Quantidade Max'),
            'quantidade_min' => Yii::t('app', 'Quantidade Min'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCampeonatos()
    {
        return $this->hasMany(Campeonato::className(), ['idEsporte' => 'idEsporte']);
    }
}
