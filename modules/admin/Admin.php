<?php

namespace app\modules\admin;

class Admin extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';

    public function init()
    {
        //$this->layoutPath = 'app\modules\admin\views\layouts';
        $this->layout = 'admin';
        parent::init();

        // custom initialization code goes here
    }
}
