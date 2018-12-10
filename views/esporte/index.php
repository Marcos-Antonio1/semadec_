<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EsporteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Esportes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="text-center">
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idEsporte',
            'modalidade',
            'categoria',
            //'quantidade_max',
            //'quantidade_min',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => "Ações", 
                'template' => '{view} {campeonato} {update}',
                'buttons' => [
                    'view' => function ($url) {
                        return Html::a('<i class="fas fa-info-circle"></i> ', $url,  ['class' => 'btn btn-primary']);
                    },
                    'campeonato' => function () {
                        return Html::a('<i class="fas fa-trophy"></i> ', ['campeonato/index'], ['class' => 'btn btn-danger']);
                    },
                ],
            ],
        ],
        'layout' => "{items}\n{pager}\n{summary}",
        'tableOptions' => [
            'class' => 'table',
        ],
        'headerRowOptions' => [
            'class' => 'thead-dark',
        ],
    ]); ?>
</div>
