<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Time;
use app\models\Usuario;

/* @var $this yii\web\View */
/* @var $model app\models\Alunohastime */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alunohastime-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'usuario_id')->dropDownList(ArrayHelper::map(Usuario::find()->where(['tipo' => 'aluno'])->All(), 'id', 'username')) ?>

    <?= $form->field($model, 'time_idTime')->dropDownList(ArrayHelper::map(Time::find()->All(), 'idTime', 'turma.Nome')) ?>

    <?= $form->field($model, 'numero')->textInput(['type' => 'number']) ?> 

    <?= $form->field($model, 'penalidades')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
