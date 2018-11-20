<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TimeCampeonato */

$this->title = Yii::t('app', 'Create Time Campeonato');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Time Campeonatos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="time-campeonato-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
