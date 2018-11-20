<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Semadec */

$this->title = Yii::t('app', 'Update Semadec: ' . $model->idSemadec, [
    'nameAttribute' => '' . $model->idSemadec,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Semadecs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idSemadec, 'url' => ['view', 'id' => $model->idSemadec]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="semadec-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
