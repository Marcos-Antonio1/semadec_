<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Esporte */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="esporte-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'categoria')->dropDownList([ 'coletivo' => 'Coletivo', 'individual' => 'Individual', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'modalidade')->dropDownList([ 'Basquete' => 'Basquete', 'Futebol' => 'Futebol', 'Maratona' => 'Maratona', 'Natacao' => 'Natacao', 'TenisDeMesa' => 'TenisDeMesa', 'Volei' => 'Volei', 'VoleiDeAreia' => 'VoleiDeAreia', 'Queimada' => 'Queimada', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'quantidade_max')->textInput() ?>

    <?= $form->field($model, 'quantidade_min')->textInput() ?>
    
    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
