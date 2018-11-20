<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Semadec */

$this->title = $model->idSemadec;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Semadecs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="semadec-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idSemadec], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idSemadec], [
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
            'idSemadec',
            'Tema',
            'campus',
            'Ano',
        ],
    ]) ?>

</div>
