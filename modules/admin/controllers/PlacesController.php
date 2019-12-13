<?php

namespace app\modules\admin\controllers;
use app\components\AdminController;

class PlacesController extends AdminController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
