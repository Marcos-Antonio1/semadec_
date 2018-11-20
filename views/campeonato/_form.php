<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Campeonato */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campeonato-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idSemadec')->textInput() ?>

    <?= $form->field($model, 'idEsporte')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
