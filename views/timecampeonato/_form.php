<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Time;
use app\models\Campeonato;

/* @var $this yii\web\View */
/* @var $model app\models\TimeCampeonato */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="time-campeonato-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idTime')->dropDownList(ArrayHelper::map(Time::find()->All(), 'idTime', 'turma.Nome')) ?>

    <?= $form->field($model, 'idCampeonato')->dropDownList(ArrayHelper::map(Campeonato::find()->All(), 'idCampeonato', 'semadec.Ano')) ?>

    <?= $form->field($model, 'pontos')->textInput() ?>

    <?= $form->field($model, 'vitorias')->textInput() ?>

    <?= $form->field($model, 'derrotas')->textInput() ?>

    <?= $form->field($model, 'grupos')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
