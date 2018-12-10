<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="text-center  mx-auto col-md-4">

    <?php $form = ActiveForm::begin(['options' => ['class' => 'form-signin']]) ?>
        <br>
        <br>
        <img class="mb-4" src="img/logo_ifrn.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        
        <?= $form->field($model, 'username')
            ->textInput(['autofocus' => true, 'id' => "inputEmail", 'class' => "form-control", 'placeholder' => "Usuário"])
            ->label('Email address', ['for' => "inputEmail", 'class' => "sr-only"])
        ?>
        
        <?= $form->field($model, 'password')
            ->passwordInput(['id' => "inputPassword", 'class' => "form-control", 'placeholder' => "Senha"])
            ->label('Senha', ['for' => "inputPassword", 'class' => "sr-only"])
        ?>

        <div class="checkbox mb-3">
            <label>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </label>
        </div>
        
        <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-lg btn-primary btn-block', 'name' => 'login-button']) ?>
        </div>

        <a href="<?= Url::toRoute('usuario/create') ?>">Cadastre-se</a>
        
        <p class="mt-5 mb-3 text-muted">&copy; 2018</p>

    <?php ActiveForm::end(); ?>
</div>
