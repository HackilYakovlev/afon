<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guest_sender".
 *
 * @property integer $id
 * @property string $sender
 */
class GuestSender extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guest_sender';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sender'], 'required'],
            [['sender'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sender' => 'Sender',
        ];
    }
}
