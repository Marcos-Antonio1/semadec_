<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Alunohastime */

$this->title = Yii::t('app', 'Create Alunohastime');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Alunohastimes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alunohastime-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
