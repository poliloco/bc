<?php

namespace app\controllers;

use Yii;
use app\models\Periodo;
use app\models\PeriodoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Propiedad;

/**
 * PeriodoController implements the CRUD actions for Periodo model.
 */
class PeriodoController extends Controller
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
     * Lists all Periodo models.
     * @return mixed
     */
    public function actionIndex()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Periodo', 'Index', NOW());")->execute();
///

        $searchModel = new PeriodoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Periodo model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Periodo', 'View', NOW());")->execute();
///
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Periodo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Periodo', 'Crear', NOW());")->execute();
///

        $model = new Periodo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
	$connection = \Yii::$app->db;
	$db = $connection->createCommand("UPDATE periodo SET `aniomes`=concat(anio,mes), condicion='Activo'")->execute();
        return $this->redirect(['index']);
//            return $this->redirect(['view', 'id' => $model->id_periodo]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Periodo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Periodo', 'Actualizar', NOW());")->execute();
///

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
	$connection = \Yii::$app->db;
	$db = $connection->createCommand('UPDATE `periodo` SET `aniomes` = concat(anio,mes)')->execute();
        return $this->redirect(['index']);
//            return $this->redirect(['view', 'id' => $model->id_periodo]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionCerrar($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Periodo', 'Cerrar', NOW());")->execute();
///

        $model = $this->findModel($id);

       // if ($model->load(Yii::$app->request->post()) && $model->save()) {
	$connection = \Yii::$app->db;

$numpropiedades = $connection->createCommand("select count(propiedad) from propiedad")->queryScalar();
$montomes=$connection->createCommand("select sum(monto) from facturas where periodo='$model->aniomes' group by periodo")->queryScalar();

$db = $connection->createCommand("INSERT INTO `recibo_cobro`(`id_recibo_cobro`, `periodo`, `propiedad`, `alicuota`, `cedula_responsable`, `nombre_responsable`, `monto`, `fecha_registro`, `fecha_pago`, `fecha_acreditacion`) 
select NULL, '$model->aniomes',propiedad,alicuota,cedula_responsable,nombre_responsable,$montomes/$numpropiedades,NOW(),NULL,NULL
from propiedad")->execute();
$db1 = $connection->createCommand("INSERT INTO `recibo_cobro_det`(`id_recibo_cobro_det`, `id_recibo_cobro`, `concepto`, `proveedor`, `factura`, `monto`) 
select NULL, r.id_recibo_cobro, f.concepto, f.proveedor, f.numero, f.monto/$numpropiedades from recibo_cobro r, facturas f where f.periodo='$model->aniomes'")->execute();

$diario = $connection->createCommand("INSERT INTO diario (id_diario, aniomes, fecha, descripcion, condicion) 
                              VALUES (NULL, '$model->aniomes', CURDATE(), 'Recibo de Condominio $model->aniomes', 'Correcto')")->execute();
$id_diario = $connection->createCommand("SELECT id_diario from diario 
                                          WHERE aniomes='$model->aniomes' order by id_diario desc;")->queryScalar();
$diario_det = $connection->createCommand("INSERT INTO diario_det (id_diario_det, id_diario, cuenta, debe, haber)
                                        SELECT NULL, $id_diario, cuenta_contable, $montomes/$numpropiedades, 0 from propiedad")->execute();
$diario_det = $connection->createCommand("INSERT INTO diario_det (id_diario_det, id_diario, cuenta, debe, haber)
                                        SELECT NULL, $id_diario, cuenta_ingresos, 0, $montomes/$numpropiedades from propiedad")->execute();
                                    
$db = $connection->createCommand("UPDATE `periodo` SET condicion = 'Cerrado' where id_periodo='$model->id_periodo'")->execute();

///////////

$propiedades = Propiedad::find()->select('propiedad, nombre_responsable, correo_responsable')->all();
if(!empty($propiedades)){
  foreach($propiedades as $propiedad){
    $destinatario = $propiedad['correo_responsable'];
    $asunto = 'Recibo de Condominio '.$model->aniomes;
    $cuerpo = '
               <html> 
               <head> 
               <title>Buen Condomino Informa:</title> 
               </head>  
               <body>
               <h1>Recibo de Condominio</h1>
               Estimado Propietario: '.$propiedad['correo_responsable'].', resposnable de la Propiedad: '.$propiedad['propiedad'].'.
Mediante el presente correo le informamos que ha sido generado el Recibo de Condominio correspondiente a '.$model->aniomes.'. Lo invitamos a visitar la pagina del sistema para mayor informacion
               </body> 
               </html>';
//para el envío en formato HTML 
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
    $headers .= "From: Buen Condominio <alexvasquezucla@gmail.com>\r\n"; 
    mail($destinatario,$asunto,$cuerpo,$headers);
  }
}
else
{}  
///////////
        return $this->redirect(['index']);
//            return $this->redirect(['view', 'id' => $model->id_periodo]);
      //  } else {
      //      return $this->render('update', [
      //          'model' => $model,
      //      ]);
      //  }
    }

    /**
     * Deletes an existing Periodo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
///
$nombre=Yii::$app->user->identity->username;
$connection = \Yii::$app->db;
$db = $connection->createCommand("INSERT INTO auditoria (id, user, modelo, accion, fechahora) VALUES (NULL, '$nombre', 'Periodo', 'Borrar', NOW());")->execute();
///
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Periodo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Periodo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Periodo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
