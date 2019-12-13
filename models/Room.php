<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property integer $id
 * @property integer $roomnum
 * @property integer $sectionid
 * @property integer $hotelid
 * @property integer $floorid
 * @property integer $personscount
 * @property integer $roomstate
 * @property integer $roomtype
 */
class Room extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['roomnum', 'sectionid', 'hotelid', 'floorid', 'personscount', 'roomstate', 'roomtype'], 'required'],
            [['roomnum', 'sectionid', 'hotelid', 'floorid', 'personscount', 'roomstate', 'roomtype'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'roomnum' => 'Roomnum',
            'sectionid' => 'Sectionid',
            'hotelid' => 'Hotelid',
            'floorid' => 'Floorid',
            'personscount' => 'Personscount',
            'roomstate' => 'Roomstate',
            'roomtype' => 'Roomtype',
        ];
    }



}
