<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JogosSeach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jogos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idJogos') ?>

    <?= $form->field($model, 'pontos_time_a') ?>

    <?= $form->field($model, 'pontos_time_b') ?>

    <?= $form->field($model, 'colocacao') ?>

    <?= $form->field($model, 'idTime1') ?>

    <?php // echo $form->field($model, 'idTime2') ?>

    <?php // echo $form->field($model, 'campeonato_idCampeonato') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
