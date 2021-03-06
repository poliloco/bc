<?php

namespace app\controllers;

use Yii;
use app\models\BancoMovimiento;
use app\models\BancoMovimientoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BancoMovimientoController implements the CRUD actions for BancoMovimiento model.
 */
class BancoMovimientoController extends Controller
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
     * Lists all BancoMovimiento models.
     * @return mixed
     */
    public function actionIndex()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'BancoMovimiento', 'Index', NOW());")->execute();
///

        $searchModel = new BancoMovimientoSearch();
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
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'BancoMovimiento', 'Index', NOW());")->execute();
///

        $searchModel = new BancoMovimientoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index2', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionIndexDeposito()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'BancoMovimiento', 'Index', NOW());")->execute();
///

        $searchModel = new BancoMovimientoSearch();
        $dataProvider = $searchModel->search1(Yii::$app->request->queryParams);

        return $this->render('index-deposito', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionIndexCheque()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'BancoMovimiento', 'Index', NOW());")->execute();
///

        $searchModel = new BancoMovimientoSearch();
        $dataProvider = $searchModel->search0(Yii::$app->request->queryParams);

        return $this->render('index-cheque', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BancoMovimiento model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'BancoMovimiento', 'View', NOW());")->execute();
///
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new BancoMovimiento model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'BancoMovimiento', 'Crear', NOW());")->execute();
///

        $model = new BancoMovimiento();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        return $this->redirect(['index']);
//            return $this->redirect(['view', 'id' => $model->id_banco_movimiento]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionCreatedeposito()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'BancoMovimiento', 'Crear', NOW());")->execute();
///

        $model = new BancoMovimiento();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
	$db = $connection->createCommand("update banco_movimiento set fecha_registro=NOW(), condicion='Emitido' where id_banco_movimiento=$model->id_banco_movimiento")->execute();
	$db = $connection->createCommand("update banco set saldo=saldo+$model->abono where cuenta_banco=$model->cuenta_banco")->execute();
        return $this->redirect(['index-deposito']);
//            return $this->redirect(['view', 'id' => $model->id_banco_movimiento]);
        } else {
            return $this->render('createdeposito', [
                'model' => $model,
            ]);
        }
    }

    public function actionCreatepago()
    {
$id_recibo_cobro = $_GET['id_recibo_cobro'];
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'BancoMovimiento', 'Crear Pago', NOW());")->execute();
///

        $model = new BancoMovimiento();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
	$db = $connection->createCommand("update banco_movimiento set fecha_registro=NOW(), condicion='Emitido' where id_banco_movimiento=$model->id_banco_movimiento")->execute();
	$db = $connection->createCommand("update banco set saldo=saldo+$model->abono where cuenta_banco=$model->cuenta_banco")->execute();

$propiedad = $connection->createCommand("select propiedad from recibo_cobro where id_recibo_cobro=$id_recibo_cobro")->queryScalar();
$saldo = $connection->createCommand("select monto-abono from recibo_cobro where id_recibo_cobro=$id_recibo_cobro")->queryScalar();
$diario = $connection->createCommand("INSERT INTO diario (id_diario, aniomes, fecha, descripcion, condicion) 
 VALUES (NULL, '$model->periodo', CURDATE(), 'Abono Recibo de Condominio $model->concepto Propiedad $propiedad', 'Correcto')")->execute();
$id_diario = $connection->createCommand("SELECT id_diario from diario 
                                        WHERE aniomes='$model->periodo' order by id_diario desc")->queryScalar();
$diario_det = $connection->createCommand("INSERT INTO diario_det (id_diario_det, id_diario, cuenta, debe, haber)
              SELECT NULL, $id_diario, cuenta_contable, $model->abono, 0 from banco where cuenta_banco='$model->cuenta_banco'")->execute();
$diario_det = $connection->createCommand("INSERT INTO diario_det (id_diario_det, id_diario, cuenta, debe, haber)
              SELECT NULL, $id_diario, cuenta_contable, 0, $model->abono from propiedad where propiedad='$propiedad'")->execute();

$diferencia=$saldo-$model->abono;
if ($diferencia<=0)
  {$db1 = $connection->createCommand("update recibo_cobro set abono=abono+$model->abono, fecha_pago=NOW(), fecha_acreditacion=NOW(), condicion='Cancelado' where id_recibo_cobro=$id_recibo_cobro")->execute();}
else
  {$db1 = $connection->createCommand("update recibo_cobro set abono=abono+$model->abono, fecha_pago=NOW(), fecha_acreditacion=NOW() where id_recibo_cobro=$id_recibo_cobro")->execute();}



        return $this->redirect(['index-deposito']);
//            return $this->redirect(['view', 'id' => $model->id_banco_movimiento]);
        } else {
            return $this->render('createpago', [
                'model' => $model,
            ]);
        }
    }

    public function actionCreatepagofacturas()
    {
$id_facturas = $_GET['id_facturas'];
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'BancoMovimiento', 'Crear Pago Factura', NOW());")->execute();
///

        $model = new BancoMovimiento();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
	$db = $connection->createCommand("update banco_movimiento set fecha_registro=NOW(), condicion='Emitido' where id_banco_movimiento=$model->id_banco_movimiento")->execute();
	$db = $connection->createCommand("update banco set saldo=saldo-$model->cargo where cuenta_banco=$model->cuenta_banco")->execute();

$proveedor = $connection->createCommand("select proveedor from facturas where id_facturas=$id_facturas")->queryScalar();
//$cuenta_contable  = $connection->createCommand("select cuenta_contable from proveedor where id_proveedor=$proveedor")->queryScalar();
$saldo = $connection->createCommand("select monto-abono from facturas where id_facturas=$id_facturas")->queryScalar();
$diario = $connection->createCommand("INSERT INTO diario (id_diario, aniomes, fecha, descripcion, condicion) 
                                     VALUES (NULL, '$model->periodo', CURDATE(), 'Pago factura: $model->concepto Proveedor $model->persona', 'Correcto')")->execute();

$id_diario = $connection->createCommand("SELECT id_diario from diario 
                                          WHERE aniomes='$model->periodo' order by id_diario desc")->queryScalar();
$diario_det = $connection->createCommand("INSERT INTO diario_det (id_diario_det, id_diario, cuenta, debe, haber)
                                          SELECT NULL, $id_diario, cuenta_contable, $model->cargo,0 from proveedores where nombre='$proveedor'")->execute();
$diario_det = $connection->createCommand("INSERT INTO diario_det (id_diario_det, id_diario, cuenta, debe, haber)
                                          SELECT NULL, $id_diario, cuenta_contable, 0, $model->cargo from banco where cuenta_banco='$model->cuenta_banco'")->execute();

$diferencia=$saldo-$model->cargo;
if ($diferencia<=0)
  {$db1 = $connection->createCommand("update facturas set abono=abono+$model->cargo, fecha_modificacion=NOW(), condicion='Cancelada' where id_facturas=$id_facturas")->execute();}
else
  {$db1 = $connection->createCommand("update facturas set abono=abono+$model->cargo, fecha_modificacion=NOW() where id_facturas=$id_facturas")->execute();}



        return $this->redirect(['index-cheque']);
//            return $this->redirect(['view', 'id' => $model->id_banco_movimiento]);
        } else {
            return $this->render('createpagofacturas', [
                'model' => $model,
            ]);
        }
    }


    public function actionCreatecheque()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'BancoMovimiento', 'Crear', NOW());")->execute();
///

        $model = new BancoMovimiento();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
	//$connection = \Yii::$app->db;
	$db = $connection->createCommand("update banco_movimiento set tipo='Cheque', fecha_registro=NOW(), condicion='Emitido' where id_banco_movimiento=$model->id_banco_movimiento")->execute();
	$db = $connection->createCommand("update banco set saldo=saldo-$model->cargo where cuenta_banco=$model->cuenta_banco")->execute();

        return $this->redirect(['index-cheque']);
//            return $this->redirect(['view', 'id' => $model->id_banco_movimiento]);
        } else {
            return $this->render('createcheque', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing BancoMovimiento model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'BancoMovimiento', 'Actualizar', NOW());")->execute();
///

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
switch ($model->tipo){
  case 'Cheque': return $this->redirect(['index-cheque']);
                 break;
  case 'Deposito': return $this->redirect(['index-deposito']);
                   break;
  case 'Trasferencia': return $this->redirect(['index-deposito']);
                       break;
  default: return $this->redirect(['index']);
    }
        //return $this->redirect(['index']);
//            return $this->redirect(['view', 'id' => $model->id_banco_movimiento]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing BancoMovimiento model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'BancoMovimiento', 'Borrar', NOW());")->execute();
///

        $model = $this->findModel($id);

switch ($model->tipo){
  case 'Cheque': $this->findModel($id)->delete();
                 return $this->redirect(['index-cheque']);
                 break;
  case 'Deposito': $this->findModel($id)->delete();
                   return $this->redirect(['index-deposito']);
                   break;
  case 'Trasferencia': $this->findModel($id)->delete();
        return $this->redirect(['index-deposito']);
                       break;
  default: $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

        //$this->findModel($id)->delete();
        //return $this->redirect(['index']);
    }

    public function actionAnular($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'BancoMovimiento', 'Anular', NOW());")->execute();
///

        $model = $this->findModel($id);
	//$connection = \Yii::$app->db;
	$db = $connection->createCommand("update banco_movimiento set condicion='Anulado' where id_banco_movimiento=$model->id_banco_movimiento")->execute();



switch ($model->tipo){
  case 'Cheque': $db = $connection->createCommand("update banco set saldo=saldo+$model->cargo where cuenta_banco=$model->cuenta_banco")->execute();
$diario = $connection->createCommand("INSERT INTO diario (id_diario, aniomes, fecha, descripcion, condicion) 
                       VALUES (NULL, '$model->periodo', CURDATE(), 'Anulacion cheque $model->referencia', 'Correcto')")->execute();
$id_diario = $connection->createCommand("SELECT id_diario from diario 
             WHERE aniomes='$model->periodo' order by id_diario desc")->queryScalar();
$diario_det = $connection->createCommand("INSERT INTO diario_det (id_diario_det, id_diario, cuenta, debe, haber)
              SELECT NULL, $id_diario, cuenta_contable, $model->cargo, 0 from banco where cuenta_banco='$model->cuenta_banco'")->execute();
$diario_det = $connection->createCommand("INSERT INTO diario_det (id_diario_det, id_diario, cuenta, debe, haber)
              SELECT NULL, $id_diario, cuenta_contable, 0 , $model->cargo from proveedores where nombre='$model->persona'")->execute();
$db2 = $connection->createCommand("update facturas set abono=abono-$model->cargo, fecha_modificacion=NOW(), condicion='Activa' where numero='$model->concepto' and proveedor='$model->persona'")->execute();
                 break;
  case 'Deposito': $db = $connection->createCommand("update banco set saldo=saldo-$model->abono where cuenta_banco=$model->cuenta_banco")->execute();

//$propiedad = $connection->createCommand("select propiedad from recibo_cobro where id_recibo_cobro=$id_recibo_cobro")->queryScalar();
//$saldo = $connection->createCommand("select monto-abono from recibo_cobro where id_recibo_cobro=$id_recibo_cobro")->queryScalar();
$diario = $connection->createCommand("INSERT INTO diario (id_diario, aniomes, fecha, descripcion, condicion) 
                       VALUES (NULL, '$model->periodo', CURDATE(), 'Anulacion Deposito $model->referencia', 'Correcto')")->execute();
$id_diario = $connection->createCommand("SELECT id_diario from diario 
                                        WHERE aniomes='$model->periodo' order by id_diario desc")->queryScalar();
$diario_det = $connection->createCommand("INSERT INTO diario_det (id_diario_det, id_diario, cuenta, debe, haber)
              SELECT NULL, $id_diario, cuenta_contable, $model->abono, 0 from propiedad where propiedad='$model->persona'")->execute();
$diario_det = $connection->createCommand("INSERT INTO diario_det (id_diario_det, id_diario, cuenta, debe, haber)
              SELECT NULL, $id_diario, cuenta_contable, 0, $model->abono from banco where cuenta_banco='$model->cuenta_banco'")->execute();
$db1 = $connection->createCommand("update recibo_cobro set abono=abono-$model->abono, fecha_pago=NOW(), fecha_acreditacion=NOW(), condicion='Pendiente' where periodo='$model->periodo' and propiedad='$model->persona'")->execute();
                   break;
  case 'Trasferencia': $db = $connection->createCommand("update banco set saldo=saldo-$model->abono where cuenta_banco=$model->cuenta_banco")->execute();
                       break;
  //default: return $this->redirect(['index']);
    }

        return $this->redirect(['index']);
    }



    /**
     * Finds the BancoMovimiento model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return BancoMovimiento the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BancoMovimiento::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
