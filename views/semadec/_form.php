<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Semadec */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="semadec-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Tema')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'campus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ano')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
