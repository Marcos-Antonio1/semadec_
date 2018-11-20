<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Eventohasusuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eventohasusuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'evento_idevento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_id')->textInput() ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 'expectador' => 'Expectador', 'ministrante' => 'Ministrante', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
