<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CampeonatoSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Campeonatos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campeonato-index">

    <div class="card-columns">
        <?php 
            $models = $dataProvider->getModels();
            foreach ($models as $model):
        ?>
        <div class="card">
            <img class="card-img-top" src="uploads/esportes/<?= $model->esporte->idEsporte ?>.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $model->esporte->modalidade ?></h5>
                <p class="card-text">Categoria: <?= $model->esporte->categoria ?></p>
                <?php if ($model->esporte->categoria === 'coletivo'): ?>
                    <p class="card-text">Número de competidores</p>
                    <p class="card-text">Mínimo: <?= $model->esporte->quantidade_min ?> e Máximo: <?= $model->esporte->quantidade_max ?></p>
                <?php else: ?>
                    <p class="card-text">Número de Atletas</p>
                    <p class="card-text">Mínimo: <?= $model->esporte->quantidade_min ?> e Máximo: <?= $model->esporte->quantidade_max ?></p>                            
                <?php endif; ?>
                <p class="card-text"><small class="text-muted"><?= $model->semadec->Tema ?></small></p>
                <a href="<?= Url::toRoute(['campeonato/view', 'id' => $model->idCampeonato]) ?>" class="btn btn-primary">Visualizar</a>
                <?php
                    if (!Yii::$app->user->isGuest && Yii::$app->user->identity->tipo === "admin")
                    {
                        echo Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->esporte->idEsporte], ['class' => 'btn btn-primary']) . " ";
                        echo Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->esporte->idEsporte], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                'method' => 'post',
                            ],
                        ]);
                    }
                ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</div>
