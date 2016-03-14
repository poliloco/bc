<?php

namespace app\controllers;

use Yii;
use app\models\Facturas;
use app\models\FacturasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FacturasController implements the CRUD actions for Facturas model.
 */
class FacturasController extends Controller
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
     * Lists all Facturas models.
     * @return mixed
     */
    public function actionIndex()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Facturas', 'Index', NOW());")->execute();
///

        $searchModel = new FacturasSearch();
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
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Facturas', 'Index', NOW());")->execute();
///

        $searchModel = new FacturasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index2', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Facturas model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Facturas', 'View', NOW());")->execute();
///
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Facturas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Facturas', 'Crear', NOW());")->execute();
///

        $model = new Facturas();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
	$db = $connection->createCommand("update facturas set fecha_registro=NOW(), condicion='Activa'
                                           where id_facturas=$model->id_facturas")->execute();

//$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO diario (id_diario, aniomes, fecha, descripcion, condicion) 
                                              VALUES (NULL, '$model->periodo', CURDATE(), '$model->concepto', 'Correcto');")->execute();

$id_diario = $connection->createCommand("SELECT id_diario from diario 
                                          WHERE aniomes='$model->periodo' order by id_diario desc;")->queryScalar();

$cuenta_contable = $connection->createCommand("SELECT cuenta_contable from proveedores 
                                                WHERE nombre='$model->proveedor';")->queryScalar();
$cuenta_egresos = $connection->createCommand("SELECT cuenta_egresos from proveedores 
                                                WHERE nombre='$model->proveedor';")->queryScalar();
$db2 = $connection->createCommand()
                  ->batchInsert('diario_det', ['id_diario_det','id_diario','cuenta','debe','haber'],
                    [
                                          ['NULL',$id_diario,$cuenta_egresos,$model->monto,0],
                                          ['NULL',$id_diario,$cuenta_contable,0,$model->monto]
                    ])
                  ->execute();

/*$db2 = $connection->createCommand("INSERT INTO diario_det (id_diario_det, id_diario, cuenta, debe, haber) 
                                                   VALUES (NULL, $id_diario, '4.03.03.00.000',$model->monto, 0);")->execute();
$db3 = $connection->createCommand("INSERT INTO diario_det (id_diario_det, id_diario, cuenta, debe, haber) 
                                                   VALUES (NULL, $id_diario, '$cuenta_contable',0,$model->monto);")->execute(); */


        return $this->redirect(['index']);

//            return $this->redirect(['view', 'id' => $model->id_facturas]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Facturas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Facturas', 'Actualizar', NOW());")->execute();
///

///
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        return $this->redirect(['index']);
//            return $this->redirect(['view', 'id' => $model->id_facturas]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Facturas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Facturas', 'Borrar', NOW());")->execute();
///
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Facturas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Facturas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Facturas::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


    public function actionPagar($id)
    {
        $model = $this->findModel($id);
        //$this->findModel($id)->delete();

        //return $this->redirect(['index']);
        return $this->redirect(['banco-movimiento/createpagofacturas', 'id_facturas' => $model->id_facturas]);
    }




}
