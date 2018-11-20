<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Campeonato */

$this->title = Yii::t('app', 'Create Campeonato');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Campeonatos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campeonato-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
