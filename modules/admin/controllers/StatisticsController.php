<?php

namespace app\modules\admin\controllers;
use app\components\AdminController;

class StatisticsController extends AdminController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGuest()
    {
        return $this->render('guest');
    }

    public function actionHotel()
    {
        return $this->render('hotel');
    }

}
