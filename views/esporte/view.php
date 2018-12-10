<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Esporte */

$this->title = $model->modalidade;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Esportes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="esporte-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php 
            echo Html::a('<i class="fas fa-chevron-left"></i> ' . Yii::t('app', 'Voltar'), Url::toRoute('esporte/index'), ['class' => 'btn btn-info']);

            if(!Yii::$app->user->isGuest && Yii::$app->user->identity->tipo === "admin")
            {
                echo Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idEsporte], ['class' => 'btn btn-primary'])
                . ' ' . 
                Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idEsporte], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                        'method' => 'post',
                    ],
                ]);
            }
        ?>
        
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'idEsporte',
            'categoria',
            'modalidade',
            'quantidade_max',
            'quantidade_min',
        ],
    ]) ?>

</div>
