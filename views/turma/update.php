<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Turma */

$this->title = Yii::t('app', 'Update Turma: ' . $model->idTurma, [
    'nameAttribute' => '' . $model->idTurma,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Turmas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idTurma, 'url' => ['view', 'id' => $model->idTurma]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="turma-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
