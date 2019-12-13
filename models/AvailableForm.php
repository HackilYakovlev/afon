<?php

namespace app\models;

use Yii;
use yii\base\Model;

class AvailableForm extends Model
{
    public $checkin;
    public $checkout;

    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['checkin', 'checkout'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'checkin' => Yii::t('app', 'Arrival'),
            'checkout' => Yii::t('app', 'Departure'),
        ];
    }

}