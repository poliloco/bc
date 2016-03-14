<?php

namespace app\controllers;

use Yii;
use app\models\Avisos;
use app\models\AvisosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AvisosController implements the CRUD actions for Avisos model.
 */
class AvisosController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Avisos models.
     * @return mixed
     */
    public function actionIndex()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Avisos', 'Index', NOW());")->execute();
///

        $searchModel = new AvisosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionIndex2()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Avisos', 'Index', NOW());")->execute();
///

        $searchModel = new AvisosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index2', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Avisos model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Avisos', 'View', NOW());")->execute();
///
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Avisos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Avisos', 'Crear', NOW());")->execute();
///

        $model = new Avisos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

	//$connection = \Yii::$app->db;
	$db = $connection->createCommand("update avisos a set a.fecha=CURDATE() where a.id_avisos=$model->id_avisos")->execute();

        return $this->redirect(['index']);
//            return $this->redirect(['view', 'id' => $model->id_avisos]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Avisos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Avisos', 'Actualizar', NOW());")->execute();
///

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        return $this->redirect(['index']);
//            return $this->redirect(['view', 'id' => $model->id_avisos]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Avisos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Avisos', 'Borrar', NOW());")->execute();
///
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Avisos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Avisos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Avisos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
