<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "floor".
 *
 * @property integer $id
 * @property integer $floornum
 * @property integer $hotelid
 */
class Floor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'floor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['floornum', 'hotelid'], 'required'],
            [['floornum', 'hotelid'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'floornum' => 'Floornum',
            'hotelid' => 'Hotelid',
        ];
    }
}
