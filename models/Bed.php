<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bed".
 *
 * @property integer $id
 * @property string $bedname
 * @property integer $roomid
 * @property integer $sectionid
 * @property integer $floorid
 * @property integer $hotelid
 */
class Bed extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bed';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bedname', 'roomid', 'sectionid', 'floorid', 'hotelid'], 'required'],
            [['roomid', 'sectionid', 'floorid', 'hotelid'], 'integer'],
            [['bedname'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bedname' => 'Bedname',
            'roomid' => 'Roomid',
            'sectionid' => 'Sectionid',
            'floorid' => 'Floorid',
            'hotelid' => 'Hotelid',
        ];
    }
}
