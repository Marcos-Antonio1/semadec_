<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Time;

/* @var $this yii\web\View */
/* @var $model app\models\Alunohastime */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alunohastime-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'usuario_id')->textInput() ?>

    <?= $form->field($model, 'time_idTime')->dropDownList(ArrayHelper::map(Time::find()->All(), 'idTime', 'Tema')) ?>

    <?= $form->field($model, 'numero')->textInput() ?>

    <?= $form->field($model, 'penalidades')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
