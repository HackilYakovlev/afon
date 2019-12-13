<?php

namespace app\components;
use yii\web\Controller;
use Yii;

class AdminController extends Controller
{
    public function init()
    {
        if (Yii::$app->user->isGuest){
            $this->redirect('/admin/access/login');
        }

    }

}