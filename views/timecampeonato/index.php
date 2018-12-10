<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TimecampeonatoSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Classificação');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="time-campeonato-index">

<?php $contador = 1; ?>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Time</th>
      <th scope="col">Pontos</th>
      <th scope="col">Vitórias</th>
      <th scope="col">Derrotas</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($models as $model): ?>
        <tr>
            <th scope="row"><?= $contador++ ?></th>
            <td><?= $model->time->turma->Nome ?></td>
            <td><?= $model->pontos ?></td>
            <td><?= $model->vitorias ?></td>
            <td><?= $model->derrotas ?></td>
            <td><a href="<?= Url::toRoute(['time/view', 'id' => $model->time->idTime]) ?>">Detalhes</a></td>
            <td><a href="<?= Url::toRoute(['timecampeonato/update', 'idTime' => $model->time->idTime, 'idCampeonato' => $model->campeonato->idCampeonato]) ?>">update</a></td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
