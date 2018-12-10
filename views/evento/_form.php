<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Semadec;

/* @var $this yii\web\View */
/* @var $model app\models\Evento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="evento-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'Tema')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'horascurriculares')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'tipo')->dropDownList(['Minicurso' => 'Minicurso', 'Oficina' => 'Oficina', 'Palestra' => 'Palestra', 'Apresentação' => 'Apresentação', ]) ?>

    <?= $form->field($model, 'semadec_idSemadec')->dropDownList(ArrayHelper::map(Semadec::find()->All(), 'idSemadec', 'Tema')) ?>

    <?= $form->field($model, 'data')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'hora_inicio')->textInput(['type' => 'time']) ?>

    <?= $form->field($model, 'hora_fim')->textInput(['type' => 'time']) ?>

    <?= $form->field($model, 'max_usuarios')->Input('number') ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
