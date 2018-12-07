<?php

namespace app\controllers;

use Yii;
use app\models\Alunohastime;
use app\models\AlunohastimeSeach;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * AlunohastimeController implements the CRUD actions for Alunohastime model.
 */
class AlunohastimeController extends Controller
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
           /* 'access' => [
               'class' => AccessControl::className(),
               //'only' => ['login', 'logout', 'signup'],
               'rules' => [
                   [
                       'allow' => true,
                       'actions' => ['index'],
                       'roles' => ['alunohastimeIndex'],
                   ],
                   [
                       'allow' => true,
                       'actions' => ['view'],
                       'roles' => ['alunohastimeView'],
                   ],
                   [
                       'allow' => true,
                       'actions' => ['create'],
                       'roles' => ['alunohastimeCreate'],
                   ],
                   [
                       'allow' => true,
                       'actions' => ['update'],
                       'roles' => ['alunohastimeUpdate'],
                   ],
               ],
           ],*/
        ];
        
    }

    /**
     * Lists all Alunohastime models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AlunohastimeSeach();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Alunohastime model.
     * @param integer $usuario_id
     * @param integer $time_idTime
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($usuario_id, $time_idTime)
    {
        return $this->render('view', [
            'model' => $this->findModel($usuario_id, $time_idTime),
        ]);
    }

    /**
     * Creates a new Alunohastime model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Alunohastime();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'usuario_id' => $model->usuario_id, 'time_idTime' => $model->time_idTime]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }


    /**
     * Updates an existing Alunohastime model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $usuario_id
     * @param integer $time_idTime
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($usuario_id, $time_idTime)
    {
        $model = $this->findModel($usuario_id, $time_idTime);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'usuario_id' => $model->usuario_id, 'time_idTime' => $model->time_idTime]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Alunohastime model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $usuario_id
     * @param integer $time_idTime
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($usuario_id, $time_idTime)
    {
        $this->findModel($usuario_id, $time_idTime)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Alunohastime model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $usuario_id
     * @param integer $time_idTime
     * @return Alunohastime the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($usuario_id, $time_idTime)
    {
        if (($model = Alunohastime::findOne(['usuario_id' => $usuario_id, 'time_idTime' => $time_idTime])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
