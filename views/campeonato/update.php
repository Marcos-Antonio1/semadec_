<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Campeonato */

$this->title = Yii::t('app', 'Update Campeonato: ' . $model->idCampeonato, [
    'nameAttribute' => '' . $model->idCampeonato,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Campeonatos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idCampeonato, 'url' => ['view', 'id' => $model->idCampeonato]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="campeonato-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
