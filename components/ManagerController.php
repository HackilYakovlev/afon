<?php

namespace app\components;
use yii\web\Controller;
use Yii;

class ManagerController extends Controller
{
    public function init()
    {
        if (Yii::$app->user->isGuest){
            $this->redirect('/manager/access/login');
        }

    }

}