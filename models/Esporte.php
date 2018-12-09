<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

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
     * @var UploadedFile
     */
    public $imageFile;

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
            [['imageFile'], 'file', 'extensions' => 'jpg'],
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
            'imageFile' => Yii::t('app', 'Imagem File'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCampeonatos()
    {
        return $this->hasMany(Campeonato::className(), ['idEsporte' => 'idEsporte']);
    }

    public function upload()
    {
        $this->imageFile->saveAs('uploads/esportes/' . $this->idEsporte . '.jpg');
        return true;
        
    }
}
