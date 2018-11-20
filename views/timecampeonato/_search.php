<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TimecampeonatoSeach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="time-campeonato-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idTime') ?>

    <?= $form->field($model, 'idCampeonato') ?>

    <?= $form->field($model, 'pontos') ?>

    <?= $form->field($model, 'vitorias') ?>

    <?= $form->field($model, 'derrotas') ?>

    <?php // echo $form->field($model, 'grupos') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
