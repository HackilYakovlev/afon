<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "room_state".
 *
 * @property integer $id
 * @property string $state
 */
class RoomState extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */


    public static function tableName()
    {
        return 'room_state';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state'], 'required'],
            [['state'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'state' => 'State',
        ];
    }

}
