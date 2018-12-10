<?php

use yii\helpers\Html;
use yii\helpers\Url;

use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EventoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Eventos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evento-index">

    <div class="card-columns">
        <?php 
            $models = $dataProvider->getModels();
            foreach ($models as $model):
        ?>
        <div class="card">
            <img class="card-img-top" src="uploads/esportes/<?= $model->idevento ?>.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $model->Tema ?></h5>
                <p class="card-text"><?= $model->descricao ?></p>

                <a href="<?= Url::toRoute(['evento/view', 'id' => $model->idevento]) ?>" class="btn btn-primary">Visualizar</a>
                <?php
                    if (!Yii::$app->user->isGuest && Yii::$app->user->identity->tipo === "admin")
                    {
                        echo Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idevento], ['class' => 'btn btn-primary']) . " ";
                        echo Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idevento], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                'method' => 'post',
                            ],
                        ]);
                    }
                ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
