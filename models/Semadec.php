<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "semadec".
 *
 * @property int $idSemadec
 * @property string $Tema
 * @property string $campus
 * @property string $Ano
 *
 * @property Campeonato[] $campeonatos
 * @property Evento[] $eventos
 */
class Semadec extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'semadec';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Tema', 'campus'], 'required'],
            [['Ano'], 'safe'],
            [['Tema', 'campus'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idSemadec' => Yii::t('app', 'Id Semadec'),
            'Tema' => Yii::t('app', 'Tema'),
            'campus' => Yii::t('app', 'Campus'),
            'Ano' => Yii::t('app', 'Ano'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCampeonatos()
    {
        return $this->hasMany(Campeonato::className(), ['idSemadec' => 'idSemadec']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventos()
    {
        return $this->hasMany(Evento::className(), ['semadec_idSemadec' => 'idSemadec']);
    }
}
