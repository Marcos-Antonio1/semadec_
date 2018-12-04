<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "esporte".
 *
 * @property int $idEsporte
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
            [['categoria', 'modalidade', 'quantidade_max', 'quantidade_min'], 'required'],
            [['categoria', 'modalidade'], 'string'],
            [['quantidade_max', 'quantidade_min'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idEsporte' => Yii::t('app', 'Id Esporte'),
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
