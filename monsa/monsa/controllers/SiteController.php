<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\widgets\ActiveForm;
use yii\web\Response;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Registro;
use app\models\Cotizantes;

class SiteController extends Controller
{        

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
    
    /*
     * Metodo que permite buscar en la tabla de cotizantes
     */
    public function actionLecturacotizante()
    {
        $table = new Cotizantes;
        $model = $table->find()->all();
        return $this->render('lecturacotizante', ['model' => $model]);                
    }
    /*
     * Controlador que permite registrar un nuevo cotizane
     */
    public function actionRegistrocotizante()
    {
        $model = new Registro;
        $msg = null;
        if ($model->load(Yii::$app->request->post()))
        {
            if ($model->validate())
            {   //consulta a base de datos
                $table = new Cotizantes;
                //$table-Nombre Columna
                $table -> Nombres = $model -> nombre;
                $table -> Apellidos = $model -> apellido;
                $table -> Correo_electronico = $model -> email;
                
                if ($table -> insert())
                {   $msg = "El registro se realizó satisfactoriamente";
                    //Limpia los campos
                    $model -> nombre = null;
                    $model -> apellido = null;
                    $model -> email = null;   
                }
                else 
                {
                    $msg = "El registro no se realizó satisfactoriamente";
                }                            
            }
            else
            {
                $model-> getErrors();
            }            
        }
        return $this->render('registrocotizante', ['model' => $model, 'msg'=> $msg ]);                
    }   
    
    
    public function actionHome()
    {
        return $this->render("home");
    }    
    
    public function actionFormulario()
    {
        return $this->render("formulario");
    }
    /*
     * Controlador de la vista casamangle
     */
    public function actionCasamangle()
    {
        return $this->render("casamangle");
    }
    /*
     * Controlador de la vista casairis
     */
    public function actionCasairis()
    {
        return $this->render("casairis");
    }
    /*
     * Controlador de la vista casaorquidea
     */
    public function actionCasaorquidea()
    {
        return $this->render("casaorquidea");
    }
    
}