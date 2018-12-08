<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EventoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="evento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!-- <?= $form->field($model, 'idevento') ?> -->
    
    <?= 
        $form->field($model, 'Tema')
        ->label('Pesquisar...', ['class'=>"sr-only"])
        ->input('text', ['placeholder'=>"Pesquisar..."])
    ?>

     <!-- <?= $form->field($model, 'descricao') ?> -->

    <!-- <?= $form->field($model, 'data') ?> -->

    <!-- <?= $form->field($model, 'horascurriculares') ?> -->

    <?php // echo $form->field($model, 'tipo') ?>

    <?php // echo $form->field($model, 'semadec_idSemadec') ?>

    <?php // echo $form->field($model, 'hora_inicio') ?>

    <?php // echo $form->field($model, 'hora_fim') ?>

    <!-- <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div> -->

    <?php ActiveForm::end(); ?>

</div>
