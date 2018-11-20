<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Esporte */

$this->title = Yii::t('app', 'Create Esporte');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Esportes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="esporte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
