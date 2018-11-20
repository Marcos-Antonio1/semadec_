<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TimeCampeonato */

$this->title = Yii::t('app', 'Update Time Campeonato: ' . $model->idTime, [
    'nameAttribute' => '' . $model->idTime,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Time Campeonatos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idTime, 'url' => ['view', 'idTime' => $model->idTime, 'idCampeonato' => $model->idCampeonato]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="time-campeonato-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
