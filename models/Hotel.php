<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hotel".
 *
 * @property integer $id
 * @property string $name
 * @property integer $floorcount
 * @property integer $weight
 */
class Hotel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hotel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'floorcount'], 'required'],
            [['floorcount', 'weight'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'floorcount' => 'Floorcount',
            'weight' => 'Weight',
        ];
    }

    public function getHotelList()
    {
        $hotels = $this->find()->all();
        foreach ($hotels as $hotelkey=>$hotelvalue){
            $hotelid = $hotelvalue->id;
            $hotels_array[$hotelvalue->id]['hotelid'] = $hotelvalue->id;
            $hotels_array[$hotelvalue->id]['hotelname'] = $hotelvalue->name;
            $floor = new Floor();
            $floors = $floor
                ->find()
                ->andFilterWhere(['hotelid'=>$hotelvalue->id])
                ->all();

            if (count($floors)>0){
                foreach ($floors as $floorkey=>$floorvalue){
                    $hotels_array[$hotelid]['floors'][$floorvalue->id] = array('floorid'=>$floorvalue->id, 'floornum'=>$floorvalue->floornum);
                    $room = new Room();
                    $rooms = $room->find()->andFilterWhere(['floorid'=>$floorvalue->id])->all();
                    if (count($rooms)>0){
                        foreach ($rooms as $roomkey=>$roomvalue){
                            $hotels_array[$hotelid]['floors'][$floorvalue->id]['rooms'][$roomvalue->id] = array('roomid'=>$roomvalue->id, 'roomnum'=>$roomvalue->roomnum, 'personscount'=>$roomvalue->personscount, 'roomstate'=>$roomvalue->roomstate);
                            $bed = new Bed();
                            $beds = $bed->find()->andFilterWhere(['roomid'=>$roomvalue->id])->all();
                            if (count($beds)>0){
                                foreach ($beds as $bedkey=>$bedvalue){
                                    $hotels_array[$hotelid]['floors'][$floorvalue->id]['rooms'][$roomvalue->id]['beds'][$bedvalue->id] = array('bedid'=>$bedvalue->id, 'bedname'=>$bedvalue->bedname);
                                }
                            }
                        }
                    }
                }
            }
        }
        return $hotels_array;
    }

    static public function checkState($what, $id)
    {
        if (isset($_SESSION['open'][$what][$id])){
            return 'style="display:table-row"';
        }
        else{
            return 'style="display:none"';
        }
    }


}
