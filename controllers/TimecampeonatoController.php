<?php

namespace app\controllers;

use Yii;
use app\models\TimeCampeonato;
use app\models\TimecampeonatoSeach;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * TimecampeonatoController implements the CRUD actions for TimeCampeonato model.
 */
class TimecampeonatoController extends Controller
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
            /*'access' => [
               'class' => AccessControl::className(),
               //'only' => ['login', 'logout', 'signup'],
               'rules' => [
                   [
                       'allow' => true,
                       'actions' => ['index'],
                       'roles' => ['timecampeonatoIndex'],
                   ],
                   [
                       'allow' => true,
                       'actions' => ['view'],
                       'roles' => ['timecampeonatoView'],
                   ],
                   [
                       'allow' => true,
                       'actions' => ['create'],
                       'roles' => ['timecampeonatoCreate'],
                   ],
                   [
                       'allow' => true,
                       'actions' => ['update'],
                       'roles' => ['timecampeonatoUpdate'],
                   ],
               ],
           ],*/
        ];
    }

    /**
     * Lists all TimeCampeonato models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TimecampeonatoSeach();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TimeCampeonato model.
     * @param integer $idTime
     * @param integer $idCampeonato
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idTime, $idCampeonato)
    {
        return $this->render('view', [
            'model' => $this->findModel($idTime, $idCampeonato),
        ]);
    }

    /**
     * Creates a new TimeCampeonato model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TimeCampeonato();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idTime' => $model->idTime, 'idCampeonato' => $model->idCampeonato]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TimeCampeonato model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idTime
     * @param integer $idCampeonato
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idTime, $idCampeonato)
    {
        $model = $this->findModel($idTime, $idCampeonato);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idTime' => $model->idTime, 'idCampeonato' => $model->idCampeonato]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TimeCampeonato model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idTime
     * @param integer $idCampeonato
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idTime, $idCampeonato)
    {
        $this->findModel($idTime, $idCampeonato)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TimeCampeonato model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idTime
     * @param integer $idCampeonato
     * @return TimeCampeonato the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idTime, $idCampeonato)
    {
        if (($model = TimeCampeonato::findOne(['idTime' => $idTime, 'idCampeonato' => $idCampeonato])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
