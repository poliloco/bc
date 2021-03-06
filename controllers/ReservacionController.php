<?php

namespace app\controllers;

use Yii;
use app\models\Reservacion;
use app\models\ReservacionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReservacionController implements the CRUD actions for Reservacion model.
 */
class ReservacionController extends Controller
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
     * Lists all Reservacion models.
     * @return mixed
     */
    public function actionIndex()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Reservacion', 'Index', NOW());")->execute();
///

        $searchModel = new ReservacionSearch();
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
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Reservacion', 'Index', NOW());")->execute();
///

        $searchModel = new ReservacionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index2', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Reservacion model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Reservacion', 'View', NOW());")->execute();
    $tipo=Yii::$app->user->identity->tipo;
///
if ($tipo<>'Residente')
  {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
  }
else
  {
        return $this->render('view2', [
            'model' => $this->findModel($id),
        ]);
  }
    }


    /**
     * Creates a new Reservacion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Reservacion', 'Crear', NOW());")->execute();
///

        $model = new Reservacion();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

	$connection = \Yii::$app->db;
	$db = $connection->createCommand("update reservacion set fecha_registro=NOW() where id_reservacion=$model->id_reservacion")->execute();

        return $this->redirect(['index']);
//            return $this->redirect(['view', 'id' => $model->id_reservacion]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionCreate2()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Reservacion', 'Crear', NOW());")->execute();
///

        $model = new Reservacion();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

	$connection = \Yii::$app->db;
	$db = $connection->createCommand("update reservacion set fecha_registro=NOW() where id_reservacion=$model->id_reservacion")->execute();

        return $this->redirect(['index2']);
//            return $this->redirect(['view', 'id' => $model->id_reservacion]);
        } else {
            return $this->render('create2', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Reservacion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Reservacion', 'Actualizar', NOW());")->execute();
///

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

	$connection = \Yii::$app->db;
	$db = $connection->createCommand("update reservacion set fecha_registro=NOW() where id_reservacion=$model->id_reservacion")->execute();

        if ($model->aprobado<>'NULL')
        {
	$connection = \Yii::$app->db;
	$db = $connection->createCommand("update reservacion set fecha_aprobacion=NOW(), responsable_aprobacion='$nombre' where id_reservacion=$model->id_reservacion")->execute();
        }
        else
        {}
        return $this->redirect(['index']);
//            return $this->redirect(['view', 'id' => $model->id_reservacion]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionUpdate2($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Reservacion', 'Actualizar', NOW());")->execute();
///

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

	$connection = \Yii::$app->db;
	$db = $connection->createCommand("update reservacion set fecha_registro=NOW() where id_reservacion=$model->id_reservacion")->execute();

        return $this->redirect(['index2']);
//            return $this->redirect(['view', 'id' => $model->id_reservacion]);
        } else {
            return $this->render('update2', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Deletes an existing Reservacion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Reservacion', 'Borrar', NOW());")->execute();
///
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Reservacion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Reservacion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Reservacion::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
