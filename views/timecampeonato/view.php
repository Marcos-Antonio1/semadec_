<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TimeCampeonato */

$this->title = $model->idTime;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Time Campeonatos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="time-campeonato-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'idTime' => $model->idTime, 'idCampeonato' => $model->idCampeonato], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'idTime' => $model->idTime, 'idCampeonato' => $model->idCampeonato], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idTime:datetime',
            'idCampeonato',
            'pontos',
            'vitorias',
            'derrotas',
            'grupos',
        ],
    ]) ?>

</div>
