<?php

namespace app\models;

use Yii;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "hotel_reserve".
 *
 * @property integer $id
 * @property integer $checkin
 * @property integer $checkout
 * @property integer $hotelid
 * @property integer $floorid
 * @property integer $roomid
 * @property integer $bedid
 * @property integer $reservelock
 * @property integer $guestid
 * @property integer $automatic
 * @property integer $evicted
 */
class HotelReserve extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hotel_reserve';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['guestid', 'checkin', 'checkout', 'hotelid', 'floorid', 'roomid', 'bedid',  'automatic', 'evicted'], 'required'],
            [['hotelid', 'floorid', 'roomid', 'bedid', 'reservelock', 'automatic', 'evicted'], 'integer']
        ];
    }


    static public function getHotelSelect($bedid)
    {
        $model = new HotelReserve();
        $line = '';
        $line.='<div class="form-group field-hotelreserve-hotelid required"><label class="col-lg-1 control-label" for="hotelreserve-hotelid">Архантарик</label>';
        $selected_hotel = Bed::find()->where(['id'=>$bedid])->one()->hotelid;

        $line.='<div class="col-lg-3">';
        $line.=Html::activeDropDownList($model, 'hotelid', ArrayHelper::map(Hotel::find()->all(), 'id', 'name'),   ['options' =>
            [
                $selected_hotel => ['selected ' => true]
            ],
            'class'=>'form-control'
        ]);
        $line.='</div>';
        $line.='</div>';
        return $line;
    }

    static public function getFloorSelect($bedid){
        $model = new HotelReserve();
        $line = '';
        $line.='<div class="form-group field-hotelreserve-floorid required">
                <label class="col-lg-1 control-label" for="hotelreserve-floorid">Этаж</label>';

        $floor_model = Bed::find()->where(['id'=>$bedid])->one();
        $selected_floor=$floor_model['floorid'];
        $floors = Floor::find()->where(['hotelid'=>$floor_model['hotelid']]);
        $line.='<div class="col-lg-3">';
        $line.=Html::activeDropDownList($model, 'floorid', ArrayHelper::map(Floor::find()->all(), 'id', 'floornum'),   ['options' =>
            [
                $selected_floor => ['selected ' => true]
            ],
            'class'=>'form-control'
        ]);
        $line.='</div>';
        $line.='</div>';
        return $line;
    }

    static public function getRoomSelect($bedid){
        $model = new HotelReserve();
        $line = '';
        $line.='<div class="form-group field-hotelreserve-roomid required">
                <label class="col-lg-1 control-label" for="hotelreserve-roomid">Комната</label>';

        $room_model = Bed::find()->where(['id'=>$bedid])->one();
        $selected_room = $room_model['roomid'];
        $rooms = Room::find()->where(['roomid'=>$room_model['roomid']]);
        $line.='<div class="col-lg-3">';
        $line.=Html::activeDropDownList($model, 'roomid', ArrayHelper::map(Room::find()->all(), 'id', 'roomnum'),   ['options' =>
            [
                $selected_room => ['selected ' => true]
            ],
            'class'=>'form-control'
        ]);
        $line.='</div>';
        $line.='</div>';
        return $line;
    }

    static public function getBedSelect($bedid){
        $model = new HotelReserve();
        $line = '';
        $line.='<div class="form-group field-hotelreserve-bedid required">
                <label class="col-lg-1 control-label" for="hotelreserve-bedid">Кровать</label>';

        $beds = Bed::find()->where(['id'=>$bedid]);
        $line.='<div class="col-lg-3">';
        $line.=Html::activeDropDownList($model, 'bedid', ArrayHelper::map(Bed::find()->all(), 'id', 'bedname'),   ['options' =>
            [
                $bedid => ['selected ' => true]
            ],
            'class'=>'form-control'
        ]);
        $line.='</div>';
        $line.='</div>';
        return $line;
    }



    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'checkin' => 'Дата заселения',
            'checkout' => 'Дата выселения',
            'hotelid' => 'Архантарик',
            'floorid' => 'Этаж',
            'roomid' => 'Комната',
            'bedid' => 'Кровать',
            'reservelock' => 'Закрепить',
            'guestid' => 'Паломник',
            'automatic' => 'Автоматически',
            'evicted' => 'Выселен',
        ];
    }
}
