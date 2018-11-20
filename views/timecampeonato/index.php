<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TimecampeonatoSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Time Campeonatos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="time-campeonato-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Time Campeonato'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idTime:datetime',
            'idCampeonato',
            'pontos',
            'vitorias',
            'derrotas',
            //'grupos',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
