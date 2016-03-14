<?php

namespace app\controllers;

use Yii;
use app\models\Catalogo;
use app\models\CatalogoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CatalogoController implements the CRUD actions for Catalogo model.
 */
class CatalogoController extends Controller
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
     * Lists all Catalogo models.
     * @return mixed
     */
    public function actionIndex()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Catalogo', 'Index', NOW());")->execute();
///

        $searchModel = new CatalogoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Catalogo model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Catalogo', 'View', NOW());")->execute();
///
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Catalogo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Catalogo', 'Crear', NOW());")->execute();
///

        $model = new Catalogo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        return $this->redirect(['index']);
//            return $this->redirect(['view', 'id' => $model->id_catalogo]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Catalogo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Catalogo', 'Actualizar', NOW());")->execute();
///

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        return $this->redirect(['index']);
//            return $this->redirect(['view', 'id' => $model->id_catalogo]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Catalogo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Catalogo', 'Borrar', NOW());")->execute();
///
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Catalogo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Catalogo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Catalogo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
