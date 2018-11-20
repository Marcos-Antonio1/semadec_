<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Semadec */

$this->title = Yii::t('app', 'Create Semadec');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Semadecs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="semadec-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
