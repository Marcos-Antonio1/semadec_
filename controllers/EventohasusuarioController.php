<?php

namespace app\controllers;

use Yii;
use app\models\Eventohasusuario;
<<<<<<< HEAD
use app\models\Evento;
use app\models\Eventohasusuarioseach; 
=======
use app\models\Eventohasusuarioseach;
>>>>>>> acde9fd784cc0350b9637d672ae4d957c038b815
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use app\controllers\EventoController;
use app\controllers\UsuarioController;

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
          /*  'access' => [
               'class' => AccessControl::className(),
               //'only' => ['login', 'logout', 'signup'],
               /*'rules' => [
                   [
                       'allow' => true,
                       'actions' => ['index'],
                       'roles' => ['eventohasusuarioIndex'],
                   ],
                   [
                       'allow' => true,
                       'actions' => ['view'],
                       'roles' => ['eventohasusuarioView'],
                   ],
                   [
                       'allow' => true,
                       'actions' => ['create'],
                       'roles' => ['eventohasusuarioCreate'],
                   ],
                   [
                       'allow' => true,
                       'actions' => ['update'],
                       'roles' => ['eventohasusuarioUpdate'],
                   ],
               ],
           ],*/
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
        $searchModel = new Eventohasusuarioseach();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('view', [
            'dataProvider' => $dataProvider,
            'model' => $this->findModel($evento_idevento, $usuario_id),
            'evento' => EventoController::findModel($evento_idevento),
            'usuario' => UsuarioController::findModel($usuario_id),
            'inscritos' => $this->findInscritos($evento_idevento),
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
<<<<<<< HEAD
        if(!Yii::$app->user->isGuest && Yii::$app->user->identity->tipo !== "admin")
        {
            $model = Evento::findOne($evento_idevento);
            $models = $this->findInscritos($evento_idevento);
            if ($model->max_usuarios !== sizeof($models))
            {
                $model = new Eventohasusuario();
                $model->evento_idevento = $evento_idevento;
                $model->usuario_id = Yii::$app->user->id;
                $model->save();
            
            return $this->redirect(['view', 'evento_idevento' => $model->evento_idevento, 'usuario_id' => $model->usuario_id]);
            }
        }else{
            return $this->redirect(['site/index']);
        }
=======
        $model = new Eventohasusuario();
        $model->evento_idevento = $evento_idevento;
        $model->usuario_id = Yii::$app->user->id;
        $model->save();

        return $this->redirect(['view', 'evento_idevento' => $model->evento_idevento, 'usuario_id' => $model->usuario_id]);
>>>>>>> acde9fd784cc0350b9637d672ae4d957c038b815
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

    protected function findInscritos($evento_idevento)
    {
        if (($model = Eventohasusuario::findAll(['evento_idevento' => $evento_idevento])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
