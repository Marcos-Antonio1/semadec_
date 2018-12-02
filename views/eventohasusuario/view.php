<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Eventohasusuario */
/* @var $evento app\models\Evento */
/* @var $usuario app\models\Usuario */
/* @var $model app\controllers\eventoController */


$this->title = 'Inscrição - ' . $evento->Tema;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Eventohasusuarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eventohasusuario-view">

    <h1 class="text-center font-weight-bold">Inscrição - <?= $evento->Tema ?></h1>

    <div class="p-3 mb-2 bg-primary text-white"><?= $usuario->username . ',<br> Sua inscrição como ' . $model->tipo . ' no ' . $evento->tipo . ' (' . $evento->Tema . '), foi realizada com sucesso!</div>'; ?>
    <p>
        <!-- <?= Html::a(Yii::t('app', 'Update'), ['update', 'evento_idevento' => $model->evento_idevento, 'usuario_id' => $model->usuario_id], ['class' => 'btn btn-primary']) ?> -->
        <?= Html::a(Yii::t('app', 'Cancelar'), ['delete', 'evento_idevento' => $model->evento_idevento, 'usuario_id' => $model->usuario_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'evento_idevento',
            'usuario_id',
            'tipo',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
