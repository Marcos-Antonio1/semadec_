<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Adm');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adm-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  // echo $this->render('_search', ['model' => $searchModel]); ?>

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Categoria</th>
      <th scope="col">Controles</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Aluno - Administrador - Ministrante</td>
      <td>
            <?= Html::a('<i class="fas fa-plus-square"></i> ' . Yii::t('app', 'Cadastrar'), ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('<i class="fas fa-cogs"></i> ' . Yii::t('app', 'Gerenciar'), ['index'], ['class' => 'btn btn-danger']) ?>
      </td>
    </tr>
    <tr>
      <td>Evento</td>
      <td>
            <?= Html::a('<i class="fas fa-plus-square"></i> ' . Yii::t('app', 'Cadastrar'), ['evento/create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('<i class="fas fa-cogs"></i> ' . Yii::t('app', 'Gerenciar'), ['evento/index'], ['class' => 'btn btn-danger']) ?>
      </td>
    </tr>
    <tr>
      <td>Esportes</td>
      <td>
            <?= Html::a('<i class="fas fa-plus-square"></i> ' . Yii::t('app', 'Cadastrar'), ['esportes/create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('<i class="fas fa-cogs"></i> ' . Yii::t('app', 'Gerenciar'), ['esporte/index'], ['class' => 'btn btn-danger']) ?>
      </td>
    </tr>
    <tr>
      <td>Campeonato</td>
      <td>
            <?= Html::a('<i class="fas fa-plus-square"></i> ' . Yii::t('app', 'Cadastrar'), ['campeonato/create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('<i class="fas fa-cogs"></i> ' . Yii::t('app', 'Gerenciar'), ['campeonato/index'], ['class' => 'btn btn-danger']) ?>
      </td>
    </tr>
  </tbody>
</table>

</div>
