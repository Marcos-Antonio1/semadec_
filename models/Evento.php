<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "evento".
 *
 * @property string $idevento
 * @property string $Tema
 * @property string $descricao
 * @property string $data
 * @property int $horascurriculares
 * @property string $tipo
 * @property int $semadec_idSemadec
 * @property string $hora_inicio
 * @property string $hora_fim
 *
 * @property Semadec $semadecIdSemadec
 * @property EventoHasUsuario[] $eventoHasUsuarios
 * @property Usuario[] $usuarios
 */
class Evento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'evento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Tema', 'descricao', 'data', 'semadec_idSemadec'], 'required'],
            [['idevento', 'horascurriculares', 'semadec_idSemadec'], 'integer'],
            [['data', 'hora_inicio', 'hora_fim'], 'safe'],
            [['tipo'], 'string'],
            [['Tema'], 'string', 'max' => 100],
            [['descricao'], 'string', 'max' => 240],
            [['idevento'], 'unique'],
            [['semadec_idSemadec'], 'exist', 'skipOnError' => true, 'targetClass' => Semadec::className(), 'targetAttribute' => ['semadec_idSemadec' => 'idSemadec']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idevento' => Yii::t('app', 'Idevento'),
            'Tema' => Yii::t('app', 'Tema'),
            'descricao' => Yii::t('app', 'Descricao'),
            'data' => Yii::t('app', 'Data'),
            'horascurriculares' => Yii::t('app', 'Horas curriculares'),
            'tipo' => Yii::t('app', 'Tipo'),
            'semadec_idSemadec' => Yii::t('app', 'Semadec'),
            'hora_inicio' => Yii::t('app', 'Hora Inicio'),
            'hora_fim' => Yii::t('app', 'Hora Fim'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSemadecIdSemadec()
    {
        return $this->hasOne(Semadec::className(), ['idSemadec' => 'semadec_idSemadec']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventoHasUsuarios()
    {
        return $this->hasMany(EventoHasUsuario::className(), ['evento_idevento' => 'idevento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['id' => 'usuario_id'])->viaTable('evento_has_usuario', ['evento_idevento' => 'idevento']);
    }
}
