<?php

namespace app\modules\admin\controllers;
use app\components\AdminController;

class UsersController extends AdminController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
