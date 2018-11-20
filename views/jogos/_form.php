<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jogos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jogos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pontos_time_a')->textInput() ?>

    <?= $form->field($model, 'pontos_time_b')->textInput() ?>

    <?= $form->field($model, 'colocacao')->textInput() ?>

    <?= $form->field($model, 'idTime1')->textInput() ?>

    <?= $form->field($model, 'idTime2')->textInput() ?>

    <?= $form->field($model, 'campeonato_idCampeonato')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
