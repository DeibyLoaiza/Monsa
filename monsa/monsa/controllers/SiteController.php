<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Registro;
use yii\widgets\ActiveForm;
use yii\web\Response;

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
    
    public function actionRegistrocotizante()
    {
        $model = new Registro;
        $msg = null;
        if ($model->load(Yii::$app->request->post()) && Yii::$app->request->isAjax)
        {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);            
          /* Corresponde al metodo validar sin Ajax 
           * if ($model->validate())
            {
                //consulta a base de datos
            }
            else
            {
                $model-> getErrors();
            } 
           */
        }
        if ($model->load(Yii::$app->request->post()))
        {
              if ($model->validate())
            {
                //consulta a base de datos
                $msg = "Registrado satisfactoriamente";
                //Limpia los campos
                $model -> nombre = null;
                $model -> apellido = null;
                $model -> email = null;                
            }
            else
            {
                $model-> getErrors();
            }            
        }
        return $this->render('registrocotizante', ['model' => $model, 'msg'=> $msg ]);
        /* Corresponde al metodo validar sin Ajax 
        return $this->render('registrocotizante', ["model" => $model]);
        */        
    }   
    
    
    public function actionHome()
    {
        return $this->render("home");
    }

    public function actionSaludar()
    {
         return $this->render("saluda");
    }
    
    public function actionFormulario()
    {
        return $this->render("formulario");
    }
    
    public function actionPeticion()
    {
        if (isset($_REQUEST["nombre"]))
           {
                          
           }
    }
}