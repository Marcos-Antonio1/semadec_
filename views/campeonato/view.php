<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Campeonato */

$this->title = $model->esporte->modalidade;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Campeonatos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campeonato-view">

    <div class="card bg-dark text-white">
        <img class="card-img" src="uploads/esportes/<?= $model->esporte->idEsporte ?>.jpg" alt="Card image">
        <div class="card-img-overlay">
            <h1 class="card-title font-weight-bold text-center"><?= $model->semadec->Tema ?></h1>
            <p class="card-text font-weight-bold text-center">Categoria: <?= $model->esporte->categoria ?></p>
            <p class="card-text font-weight-bold text-center">            
                <a href="<?= Url::toRoute(['timecampeonato/classificacao', "idCampeonato" => $model->idCampeonato]) ?>" class="btn btn-danger">Classificação</a>
            </p>
    <h2 class="font-weight-bold text-center">Times cadastrados no campeonato</h2>


    <table class="table">
        <thead>
            <tr>
                <th class="col">Turma</th>
                <th class="col">Curso</th>
                <th class="col">Visualizar</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($model->times as $time): ?>
            <tr>
                <td><?= $time->turma->Nome ?></td>
                <td><?= $time->turma->Curso ?></td>
                <td class="text-center"><a href="<?= Url::toRoute(['time/view', 'id' => $time->idTime]) ?>" class="btn btn-danger"><i class="fas fa-arrow-right"></i></a></td>
            </tr>
    <?php endforeach; ?>
    </tbody>
</table>

    <?php if (!Yii::$app->user->isGuest && Yii::$app->user->identity->tipo === "admin"): ?>
        <p>
            <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idCampeonato], ['class' => 'btn btn-primary']) ?>
            <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idCampeonato], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    <?php endif; ?>
    </div>
    </div>
</div>
