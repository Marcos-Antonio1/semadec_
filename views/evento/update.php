<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Evento */

$this->title = Yii::t('app', 'Update Evento: ' . $model->idevento, [
    'nameAttribute' => '' . $model->idevento,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Eventos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idevento, 'url' => ['view', 'id' => $model->idevento]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="evento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
