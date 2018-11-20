<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "turma".
 *
 * @property int $idTurma
 * @property string $Nome
 * @property string $Curso
 *
 * @property Time[] $times
 */
class Turma extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'turma';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idTurma', 'Nome', 'Curso'], 'required'],
            [['idTurma'], 'integer'],
            [['Nome', 'Curso'], 'string', 'max' => 45],
            [['idTurma'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idTurma' => Yii::t('app', 'Id Turma'),
            'Nome' => Yii::t('app', 'Nome'),
            'Curso' => Yii::t('app', 'Curso'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimes()
    {
        return $this->hasMany(Time::className(), ['idTurma' => 'idTurma']);
    }
}
