<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Eventohasusuario */

$this->title = Yii::t('app', 'Update Eventohasusuario: ' . $model->evento_idevento, [
    'nameAttribute' => '' . $model->evento_idevento,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Eventohasusuarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->evento_idevento, 'url' => ['view', 'evento_idevento' => $model->evento_idevento, 'usuario_id' => $model->usuario_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="eventohasusuario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
