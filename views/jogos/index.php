<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JogosSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Jogos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jogos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Jogos'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idJogos',
            'pontos_time_a:datetime',
            'pontos_time_b:datetime',
            'colocacao',
            'idTime1:datetime',
            //'idTime2:datetime',
            //'campeonato_idCampeonato',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
