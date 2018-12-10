<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biografia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'formacao')->textInput(['maxlength' => true]) ?>

    <?php if(!Yii::$app->user->isGuest && Yii::$app->user->identity->tipo === "admin"): ?>

    <?= $form->field($model, 'tipo')->dropDownList(['aluno' => 'Aluno', 'admin' => 'Admin', 'ministrante' => 'Ministrante', ]) ?>

    <?php else: ?>

    <?= $form->field($model, 'tipo')->dropDownList(['aluno' => 'Aluno']) ?>

    <?php endif; ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_repeat')->passwordInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?> -->

    <!-- <?= $form->field($model, 'access_token')->textInput(['maxlength' => true]) ?> -->

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
