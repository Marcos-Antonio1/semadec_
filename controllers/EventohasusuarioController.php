<?php

namespace app\controllers;

use Yii;
use app\models\Eventohasusuario;
use app\models\Eventohasusuarioseach;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EventohasusuarioController implements the CRUD actions for Eventohasusuario model.
 */
class EventohasusuarioController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Eventohasusuario models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Eventohasusuarioseach();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Eventohasusuario model.
     * @param string $evento_idevento
     * @param integer $usuario_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($evento_idevento, $usuario_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($evento_idevento, $usuario_id),
        ]);
    }

    /**
     * Creates a new Eventohasusuario model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Eventohasusuario();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'evento_idevento' => $model->evento_idevento, 'usuario_id' => $model->usuario_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Eventohasusuario model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionInscricao($evento_idevento)
    {
        $model = new Eventohasusuario();
        $model->evento_idevento = $evento_idevento;
        $model->usuario_id = Yii::$app->user->id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'evento_idevento' => $model->evento_idevento, 'usuario_id' => $model->usuario_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Eventohasusuario model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $evento_idevento
     * @param integer $usuario_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($evento_idevento, $usuario_id)
    {
        $model = $this->findModel($evento_idevento, $usuario_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'evento_idevento' => $model->evento_idevento, 'usuario_id' => $model->usuario_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Eventohasusuario model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $evento_idevento
     * @param integer $usuario_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($evento_idevento, $usuario_id)
    {
        $this->findModel($evento_idevento, $usuario_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Eventohasusuario model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $evento_idevento
     * @param integer $usuario_id
     * @return Eventohasusuario the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($evento_idevento, $usuario_id)
    {
        if (($model = Eventohasusuario::findOne(['evento_idevento' => $evento_idevento, 'usuario_id' => $usuario_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
