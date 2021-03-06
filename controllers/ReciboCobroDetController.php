<?php

namespace app\controllers;

use Yii;
use app\models\ReciboCobroDet;
use app\models\ReciboCobroDetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReciboCobroDetController implements the CRUD actions for ReciboCobroDet model.
 */
class ReciboCobroDetController extends Controller
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
     * Lists all ReciboCobroDet models.
     * @return mixed
     */
    public function actionIndex()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'ReciboCobroDet', 'Index', NOW());")->execute();
///

        $searchModel = new ReciboCobroDetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ReciboCobroDet model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'ReciboCobroDet', 'View', NOW());")->execute();
///
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ReciboCobroDet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'ReciboCobroDet', 'Crear', NOW());")->execute();
///

        $model = new ReciboCobroDet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
$db = $connection->createCommand("UPDATE recibo_cobro set monto=monto+$model->monto where id_recibo_cobro=$model->id_recibo_cobro")->execute();

$periodo = $connection->createCommand("select periodo from recibo_cobro where id_recibo_cobro=$model->id_recibo_cobro")->queryScalar();
$propiedad = $connection->createCommand("select propiedad from recibo_cobro where id_recibo_cobro=$model->id_recibo_cobro")->queryScalar();
$diario = $connection->createCommand("INSERT INTO diario (id_diario, aniomes, fecha, descripcion, condicion) 
                           VALUES (NULL, '$periodo', CURDATE(), '$model->concepto - Propiedad: $propiedad', 'Correcto')")->execute();

$id_diario = $connection->createCommand("SELECT id_diario from diario 
                                          WHERE aniomes='$periodo' order by id_diario desc")->queryScalar();
$diario_det = $connection->createCommand("INSERT INTO diario_det (id_diario_det, id_diario, cuenta, debe, haber)
                     SELECT NULL, $id_diario, cuenta_contable, $model->monto, 0 from propiedad where propiedad='$propiedad'")->execute();
$diario_det = $connection->createCommand("INSERT INTO diario_det (id_diario_det, id_diario, cuenta, debe, haber)
                     SELECT NULL, $id_diario, cuenta_ingresos, 0, $model->monto from propiedad where propiedad='$propiedad'")->execute();

        return $this->redirect(['index', 'id' => $model->id_recibo_cobro]);
//            return $this->redirect(['view', 'id' => $model->id_recibo_cobro_det]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ReciboCobroDet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'ReciboCobroDet', 'Actualizar', NOW());")->execute();
///

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        return $this->redirect(['index']);
//            return $this->redirect(['view', 'id' => $model->id_recibo_cobro_det]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ReciboCobroDet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'ReciboCobroDet', 'Borrar', NOW());")->execute();
///
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ReciboCobroDet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return ReciboCobroDet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ReciboCobroDet::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
