<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Alunohastime */

$this->title = Yii::t('app', 'Update Alunohastime: ' . $model->usuario_id, [
    'nameAttribute' => '' . $model->usuario_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Alunohastimes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->usuario_id, 'url' => ['view', 'usuario_id' => $model->usuario_id, 'time_idTime' => $model->time_idTime]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="alunohastime-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
