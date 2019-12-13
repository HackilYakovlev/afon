<?php

namespace app\modules\manager;

class Manager extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\manager\controllers';

    public function init()
    {
        $this->layout = 'manager';
        parent::init();

        // custom initialization code goes here
    }
}
