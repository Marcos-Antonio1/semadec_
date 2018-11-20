<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campeonato".
 *
 * @property int $idCampeonato
 * @property int $idSemadec
 * @property int $idEsporte
 *
 * @property Esporte $esporte
 * @property Semadec $semadec
 * @property Jogos[] $jogos
 * @property TimeCampeonato $timeCampeonato
 * @property Time[] $times
 */
class Campeonato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'campeonato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idSemadec', 'idEsporte'], 'integer'],
            [['idEsporte'], 'exist', 'skipOnError' => true, 'targetClass' => Esporte::className(), 'targetAttribute' => ['idEsporte' => 'idEsporte']],
            [['idSemadec'], 'exist', 'skipOnError' => true, 'targetClass' => Semadec::className(), 'targetAttribute' => ['idSemadec' => 'idSemadec']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idCampeonato' => Yii::t('app', 'Id Campeonato'),
            'idSemadec' => Yii::t('app', 'Id Semadec'),
            'idEsporte' => Yii::t('app', 'Id Esporte'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEsporte()
    {
        return $this->hasOne(Esporte::className(), ['idEsporte' => 'idEsporte']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSemadec()
    {
        return $this->hasOne(Semadec::className(), ['idSemadec' => 'idSemadec']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJogos()
    {
        return $this->hasMany(Jogos::className(), ['campeonato_idCampeonato' => 'idCampeonato']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimeCampeonato()
    {
        return $this->hasOne(TimeCampeonato::className(), ['idCampeonato' => 'idCampeonato']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimes()
    {
        return $this->hasMany(Time::className(), ['idTime' => 'idTime'])->viaTable('time_campeonato', ['idCampeonato' => 'idCampeonato']);
    }
}
