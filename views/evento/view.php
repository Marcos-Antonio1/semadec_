<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Evento */

$this->title = $model->Tema;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Eventos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="card text-center">
        <div class="card-header">
            <?= $model->tipo ?>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $model->Tema ?></h5>
            <p class="card-text"><?= $model->descricao ?></p>
            <p class="card-text"><?= 'Horas curriculares: ' . $model->horascurriculares ?></p>
            <?= Html::a(Yii::t('app', 'Inscrever'), ['eventohasusuario/inscricao', 'evento_idevento' => $model->idevento], ['class' => 'btn btn-primary']) ?>
        </div>
        <div class="card-footer text-muted">
            <?= 'data: ' . $model->data . ' das ' . $model->hora_inicio . ' as ' . $model->hora_fim ?> 
        </div>
    </div>

    <p class="text-right">
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idevento], ['class' => 'btn btn-info']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idevento], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>
