<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Esporte */

$this->title = Yii::t('app', 'Update Esporte: ' . $model->idEsporte, [
    'nameAttribute' => '' . $model->idEsporte,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Esportes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idEsporte, 'url' => ['view', 'id' => $model->idEsporte]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="esporte-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
