<?php

namespace app\modules\admin\controllers;

use app\components\AdminController;

class DefaultController extends AdminController
{
    public function actionIndex()
    {
        //return $this->render('index');
        $this->redirect('/admin/guests/index');
    }
}
