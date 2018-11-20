<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Alunohastime */

$this->title = $model->usuario_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Alunohastimes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alunohastime-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'usuario_id' => $model->usuario_id, 'time_idTime' => $model->time_idTime], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'usuario_id' => $model->usuario_id, 'time_idTime' => $model->time_idTime], [
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
            'usuario_id',
            'time_idTime:datetime',
            'numero',
            'penalidades',
        ],
    ]) ?>

</div>
