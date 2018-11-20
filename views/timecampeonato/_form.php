<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TimeCampeonato */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="time-campeonato-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idTime')->textInput() ?>

    <?= $form->field($model, 'idCampeonato')->textInput() ?>

    <?= $form->field($model, 'pontos')->textInput() ?>

    <?= $form->field($model, 'vitorias')->textInput() ?>

    <?= $form->field($model, 'derrotas')->textInput() ?>

    <?= $form->field($model, 'grupos')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
