<?php

namespace app\modules\manager\controllers;

use app\components\ManagerController;

class DefaultController extends ManagerController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
