<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "time_campeonato".
 *
 * @property int $idTime
 * @property int $idCampeonato
 * @property int $pontos
 * @property int $vitorias
 * @property int $derrotas
 * @property string $grupos
 *
 * @property Campeonato $campeonato
 * @property Time $time
 */
class TimeCampeonato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'time_campeonato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idTime', 'idCampeonato'], 'required'],
            [['idTime', 'idCampeonato', 'pontos', 'vitorias', 'derrotas'], 'integer'],
            [['grupos'], 'string', 'max' => 45],
            [['idTime'], 'unique', 'targetAttribute' => ['idTime', 'idCampeonato']],
            [['idCampeonato'], 'exist', 'skipOnError' => true, 'targetClass' => Campeonato::className(), 'targetAttribute' => ['idCampeonato' => 'idCampeonato']],
            [['idTime'], 'exist', 'skipOnError' => true, 'targetClass' => Time::className(), 'targetAttribute' => ['idTime' => 'idTime']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idTime' => Yii::t('app', 'Id Time'),
            'idCampeonato' => Yii::t('app', 'Id Campeonato'),
            'pontos' => Yii::t('app', 'Pontos'),
            'vitorias' => Yii::t('app', 'Vitorias'),
            'derrotas' => Yii::t('app', 'Derrotas'),
            'grupos' => Yii::t('app', 'Grupos'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCampeonato()
    {
        return $this->hasOne(Campeonato::className(), ['idCampeonato' => 'idCampeonato']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTime()
    {
        return $this->hasOne(Time::className(), ['idTime' => 'idTime']);
    }

    public function findByCampeonato($idCampeonato)
    {
        return TimeCampeonato::find()
            ->where(['idCampeonato' => $idCampeonato])
            ->orderBy('pontos DESC')
            ->all();   
    }
}
