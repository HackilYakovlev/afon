<?php

namespace app\modules\admin\controllers;
use app\components\AdminController;

class SettingsController extends AdminController
{
    public function actionAdmins()
    {
        return $this->render('admins');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionManagers()
    {
        return $this->render('managers');
    }

    public function actionHotels()
    {
        return $this->render('hotels');
    }

    public function actionGuests()
    {
        return $this->render('guests');
    }

}
