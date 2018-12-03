<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Semadec;
use app\models\Esporte;

/* @var $this yii\web\View */
/* @var $model app\models\Campeonato */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campeonato-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idSemadec')->dropDownList(ArrayHelper::map(Semadec::find()->All(), 'idSemadec', 'Tema')) ?>

    <?= $form->field($model, 'idEsporte')->dropDownList(ArrayHelper::map(Esporte::find()->All(), 'idEsporte', 'nome')) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
