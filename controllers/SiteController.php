<?php

namespace app\controllers;

use app\models\Obschie;
use app\models\Rkphones;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
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

    /**
     * {@inheritdoc}
     */
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionTaraskul()
    {
        return $this->render('taraskul');
    }
    public  function actionObschie()
    {
        return $this->render('obschie');
    }

    public static function returnNameSidebar()
    {
        $getView = Yii::$app->request->pathInfo;
        switch ($getView)
        {
            case '':
                {
                    return "Меню телефонного справочника";
                }
            case 'site/index':
                {
                    return "Меню телефонного справочника";
                }
            case 'site/taraskul':
                {
                    return "Меню справочника Тараскуля";
                }
            case 'site/obschie':
                {
                    return "Общие вопросы";
                }
        }
    }
    public static function renderSidebar()
    {
        $sidebarName = self::returnNameSidebar();
        if ($sidebarName == "Меню телефонного справочника"){
            Rkphones::renderSidebar();
        }
        elseif ($sidebarName == "Меню справочника Тараскуля"){
            include "../views/sidebars/taraskul.php";
        }
        elseif ($sidebarName == "Общие вопросы"){
            Obschie::renderSidebar();
        }
    }
}
