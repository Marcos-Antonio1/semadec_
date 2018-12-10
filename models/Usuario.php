<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $tipo
 * @property string $password
 * @property string $auth_key
 * @property string $access_token
 * @property string $biografia
 * @property string $formacao
 *
 * @property AlunoHasTime[] $alunoHasTimes
 * @property Time[] $timeIdTimes
 * @property EventoHasUsuario[] $eventoHasUsuarios
 * @property Evento[] $eventoIdeventos
 */
class Usuario extends ActiveRecord implements IdentityInterface
{

    public $password_repeat;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'tipo', 'password'], 'required'],
            [['tipo'], 'string'],
            [['username', 'email'], 'string', 'max' => 45],
            [['password'], 'string', 'max' => 100],
            [['auth_key', 'access_token', 'formacao'], 'string', 'max' => 300],
            [['biografia'], 'string', 'max' => 1000],
            [['password_repeat'], 'compare', 'compareAttribute' => 'password'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'email' => Yii::t('app', 'Email'),
            'tipo' => Yii::t('app', 'Tipo'),
            'password' => Yii::t('app', 'Password'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'access_token' => Yii::t('app', 'Access Token'),
            'biografia' => Yii::t('app', 'Biografia'),
            'formacao' => Yii::t('app', 'Formacao'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlunoHasTimes()
    {
        return $this->hasMany(AlunoHasTime::className(), ['usuario_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimeIdTimes()
    {
        return $this->hasMany(Time::className(), ['idTime' => 'time_idTime'])->viaTable('aluno_has_time', ['usuario_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventoHasUsuarios()
    {
        return $this->hasMany(EventoHasUsuario::className(), ['usuario_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventoIdeventos()
    {
        return $this->hasMany(Evento::className(), ['idevento' => 'evento_idevento'])->viaTable('evento_has_usuario', ['usuario_id' => 'id']);
    }

    /**
     * Localiza uma identidade pelo ID informado
     *
     * @param string|int $id o ID a ser localizado
     * @return IdentityInterface|null o objeto da identidade que corresponde ao ID informado
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * Localiza uma identidade pelo token informado
     *
     * @param string $token o token a ser localizado
     * @return IdentityInterface|null o objeto da identidade que corresponde ao token informado
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return self::findOne(['access_token' => $token]);
        //return static::findOne(['access_token' => $token]);  são equivalentes
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
       return static::findOne(['username' => $username]);
    }

    /**
     * @return int|string o ID do usuário atual
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string|string o tipo do usuário atual
     */
    public function getTipo()
    {
        return [
        'admin' => Yii::t('app','Admin'),
        'aluno' => Yii::t('app','Aluno'),
        'ministrante' => Yii::t('app','Ministrante'),

        ];
    }

    /**
     * @return string a chave de autenticação do usuário atual
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @param string $authKey
     * @return bool se a chave de autenticação do usuário atual for válida
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === sha1($password);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->auth_key = \Yii::$app->security->generateRandomString();
                $this->access_token = \Yii::$app->security->generateRandomString();
            }

            if (isset($this->dirtyAttributes['password']))
                $this->password = sha1($this->password);

            return true;
        }
        return false;
    }

    public function afterSave($insert, $changeAttributed)
    {
        $auth = Yii::$app->authManager;

        if (!$insert) $auth->revokeAll($this->getId());

        $papel = $auth->getRole($this->tipo);

        $auth->assign($papel, $this->getId());

        parent::afterSave($insert, $changeAttributed);
    }

    public function afterDelete()
    {
        Yii::$app->authManager->revokeAll($this->getId());

        parent::afterDelete();
    }
}
