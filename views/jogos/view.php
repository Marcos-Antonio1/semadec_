<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Jogos */

$this->title = $model->idJogos;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jogos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jogos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idJogos], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idJogos], [
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
            'idJogos',
            'pontos_time_a:datetime',
            'pontos_time_b:datetime',
            'colocacao',
            'idTime1:datetime',
            'idTime2:datetime',
            'campeonato_idCampeonato',
        ],
    ]) ?>

</div>
