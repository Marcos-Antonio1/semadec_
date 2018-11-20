<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jogos".
 *
 * @property int $idJogos
 * @property int $pontos_time_a
 * @property int $pontos_time_b
 * @property int $colocacao
 * @property int $idTime1
 * @property int $idTime2
 * @property int $campeonato_idCampeonato
 *
 * @property Campeonato $campeonatoIdCampeonato
 * @property Time $time1
 * @property Time $time2
 */
class Jogos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jogos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pontos_time_a', 'pontos_time_b', 'colocacao', 'idTime1', 'idTime2', 'campeonato_idCampeonato'], 'integer'],
            [['idTime1', 'idTime2', 'campeonato_idCampeonato'], 'required'],
            [['campeonato_idCampeonato'], 'exist', 'skipOnError' => true, 'targetClass' => Campeonato::className(), 'targetAttribute' => ['campeonato_idCampeonato' => 'idCampeonato']],
            [['idTime1'], 'exist', 'skipOnError' => true, 'targetClass' => Time::className(), 'targetAttribute' => ['idTime1' => 'idTime']],
            [['idTime2'], 'exist', 'skipOnError' => true, 'targetClass' => Time::className(), 'targetAttribute' => ['idTime2' => 'idTime']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idJogos' => Yii::t('app', 'Id Jogos'),
            'pontos_time_a' => Yii::t('app', 'Pontos Time A'),
            'pontos_time_b' => Yii::t('app', 'Pontos Time B'),
            'colocacao' => Yii::t('app', 'Colocacao'),
            'idTime1' => Yii::t('app', 'Id Time1'),
            'idTime2' => Yii::t('app', 'Id Time2'),
            'campeonato_idCampeonato' => Yii::t('app', 'Campeonato Id Campeonato'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCampeonatoIdCampeonato()
    {
        return $this->hasOne(Campeonato::className(), ['idCampeonato' => 'campeonato_idCampeonato']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTime1()
    {
        return $this->hasOne(Time::className(), ['idTime' => 'idTime1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTime2()
    {
        return $this->hasOne(Time::className(), ['idTime' => 'idTime2']);
    }
}
