<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "evento_has_usuario".
 *
 * @property string $evento_idevento
 * @property int $usuario_id
 * @property string $tipo
 *
 * @property Evento $eventoIdevento
 * @property Usuario $usuario
 */
class EventoHasUsuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'evento_has_usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['evento_idevento', 'usuario_id'], 'required'],
            [['evento_idevento', 'usuario_id'], 'integer'],
            [['tipo'], 'string'],
            [['evento_idevento', 'usuario_id'], 'unique', 'targetAttribute' => ['evento_idevento', 'usuario_id']],
            [['evento_idevento'], 'exist', 'skipOnError' => true, 'targetClass' => Evento::className(), 'targetAttribute' => ['evento_idevento' => 'idevento']],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'evento_idevento' => Yii::t('app', 'Evento Idevento'),
            'usuario_id' => Yii::t('app', 'Usuario ID'),
            'tipo' => Yii::t('app', 'Tipo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventoIdevento()
    {
        return $this->hasOne(Evento::className(), ['idevento' => 'evento_idevento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_id']);
    }
}
