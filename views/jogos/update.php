<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jogos */

$this->title = Yii::t('app', 'Update Jogos: ' . $model->idJogos, [
    'nameAttribute' => '' . $model->idJogos,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jogos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idJogos, 'url' => ['view', 'id' => $model->idJogos]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="jogos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
