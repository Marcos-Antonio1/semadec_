<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\controllers\EventoController;

/* @var $this yii\web\View */
/* @var $model app\models\Eventohasusuario */

$this->title = EventoController::findModel($model->evento_idevento);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Eventohasusuarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eventohasusuario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'evento_idevento' => $model->evento_idevento, 'usuario_id' => $model->usuario_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'evento_idevento' => $model->evento_idevento, 'usuario_id' => $model->usuario_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'evento_idevento',
            'usuario_id',
            'tipo',
        ],
    ]) ?>

    <div class="p-3 mb-2 bg-primary text-white">Inscreção realizada com sucesso!</div>

</div>
