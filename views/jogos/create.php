<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jogos */

$this->title = Yii::t('app', 'Create Jogos');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jogos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jogos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
