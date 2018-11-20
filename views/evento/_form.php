<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Evento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="evento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idevento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tema')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'horascurriculares')->textInput() ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 'Minicurso' => 'Minicurso', 'Oficina' => 'Oficina', 'Palestra' => 'Palestra', 'Apresentação' => 'Apresentação', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'semadec_idSemadec')->textInput() ?>

    <?= $form->field($model, 'hora_inicio')->textInput() ?>

    <?= $form->field($model, 'hora_fim')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
