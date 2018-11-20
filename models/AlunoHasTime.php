<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno_has_time".
 *
 * @property int $usuario_id
 * @property int $time_idTime
 * @property int $numero
 * @property string $penalidades
 *
 * @property Time $timeIdTime
 * @property Usuario $usuario
 */
class AlunoHasTime extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aluno_has_time';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario_id', 'time_idTime', 'numero'], 'required'],
            [['usuario_id', 'time_idTime', 'numero'], 'integer'],
            [['penalidades'], 'string', 'max' => 45],
            [['usuario_id', 'time_idTime'], 'unique', 'targetAttribute' => ['usuario_id', 'time_idTime']],
            [['time_idTime'], 'exist', 'skipOnError' => true, 'targetClass' => Time::className(), 'targetAttribute' => ['time_idTime' => 'idTime']],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'usuario_id' => Yii::t('app', 'Usuario ID'),
            'time_idTime' => Yii::t('app', 'Time Id Time'),
            'numero' => Yii::t('app', 'Numero'),
            'penalidades' => Yii::t('app', 'Penalidades'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimeIdTime()
    {
        return $this->hasOne(Time::className(), ['idTime' => 'time_idTime']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_id']);
    }
}
