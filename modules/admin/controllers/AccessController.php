<?php

namespace app\modules\admin\controllers;
use app\modules\admin\models\LoginForm;
use yii\web\Controller;
use Yii;

/**
 * Class AccessController
 * @package app\modules\admin\controllers
 */
class AccessController extends Controller{


    public function init()
    {
        $this->layout = 'empty';
    }

    /**
     * @return string|\yii\web\Response
     */
    public function actionLogin()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()){
            $this->redirect('/admin');
        } else {
            return $this->render('login', [
                'model'=>$model
            ]);
        }
    }

    /**
     * @return \yii\web\Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
}