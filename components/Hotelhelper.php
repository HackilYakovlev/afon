<?php

namespace app\components;
use Yii;
use yii\base\Component;
use app\models\RoomState;
use app\models\HotelReserve;
use yii\db\Query;

/**
 * Class Hotelhelper
 * @package app\components
 */
class Hotelhelper extends Component
{

    public $count_after = 50;
    public $cell_length = 50;

    /**
     * @param $roomstateid
     * @param $roomid
     * @param int $simple
     * @return string
     */
    public function getRoomState($roomstateid, $roomid, $simple=0)
    {
        if ($roomstateid==0){
            $roomstateid=1;
        }

        $rstvalue = RoomState::find()->filterWhere(array('id'=>$roomstateid))->one()->state;

        $style = '';

        switch ($roomstateid) {
            case 1:
                $style = 'background-color:green;';
                break;

            case 2:
                $style = 'background-color:red;';
                break;

            case 3:
                $style = 'background-color:#555';
                break;

            default:
                #code...
                break;
        }

        if ($simple==0){
            $span = '<span class="room_state" onclick="ChangeRoomState('.$roomid.');" style="'.$style.'">'.$rstvalue.'</span>';
        }

        else{
            $span = '<span class="room_state" onclick="ChangeRoomState('.$roomid.');" style="'.$style.'">&nbsp;</span>';
        }

        return $span;
    }


    /**
     * @param $bedid
     * @return string
     */
    public function drawReserveDiv($bedid)
    {
        $data_array = $this->getDataLine();
        $query = new Query();
        $query->select('h.*, g.*, h.id as reserve_id')
            ->from('hotel_reserve as h')
            ->leftJoin('guest as g', 'h.guestid=g.id')
            ->where('(
                            (h.checkin BETWEEN '.($data_array[0]-3600*24).' AND '.($data_array[$this->count_after]+3600*24).')
                            OR
                            (h.checkout BETWEEN '.($data_array[0]-3600*24).' AND '.($data_array[$this->count_after]+3600*24).')
                            OR
                            (h.checkin < '.($data_array[0]-3600*24).' AND h.checkout>'.($data_array[$this->count_after]+3600*24).')
                        ) AND h.bedid='.$bedid);

        $rows = $query->all();

        $divs = '';
        $dop = 0;
        $margin_left=0;

        foreach ($rows as $key=>$value){
            $checkin = $value['checkin'];
            $checkout = $value['checkout'];

            switch ($value['reservelock']){
                case 0:
                    $background = '#2494E1';
                    break;

                case 1:
                    $background = 'green';
                    break;

                default:
                    #code...
                    break;
            }

            if ($value['evicted']==1){
                $background = '#999999';
            }

            $date_diff = round(($checkout-$checkin)/3600/24);

            if ($checkout==$data_array[0]){
                $min_date = $data_array[0];
                $margin_left=50;
                $border_radius_left=0;
                $border_radius_right=10;
            }

            if ($checkin<$data_array[0]){
                $min_date = $data_array[0];
                $margin_left=50;
                $border_radius_left=0;
                $dop = 73;
            }

            elseif ($checkin>=$data_array[0]){
                $border_radius_left = 10;
                $min_date = $checkin;
                foreach ($data_array as $dk=>$dv){
                    if (date('Y-m-d', $dv) == date('Y-m-d', $checkin)){
                        $margin_left=$dk;
                    }
                }
                $margin_left = $margin_left*$this->cell_length+$this->cell_length+30;
            }

            else {
                $margin_left = 0;
            }

            if (($data_array[$this->count_after+5]-$checkout)<0){
                $max_date = $data_array[$this->count_after+5];
                $border_radius_right = 0;
            }

            else {
                $max_date = $checkout;
                $border_radius_right = 10;
            }

            $div_width = round(($max_date-$min_date)/3600/24*$this->cell_length+$dop);

            $value['name'] = 'test';

            $divs.='<div class="draggable" id="register_line_'.$value['guestid'].'" onclick="editReserve('.$value['reserve_id'].');" style="width:'.$div_width.'px; z-index:0; background: '.$background.'; opacity:0.8;   margin-left:'.$margin_left.'px; border-top-left-radius:'.$border_radius_left.'px; border-bottom-left-radius:'.$border_radius_left.'px; border-top-right-radius:'.$border_radius_right.'px; border-bottom-right-radius:'.$border_radius_right.'px;"><div class="draggable_in" style="color:#000;">'.$value['surname'].'</div></div>';

            $divs.='<script>$(document).ready(function(){$("#register_line_'.$value['guestid'].'").simpletip(
                {
                    fixed:false,
                    content: "Фамилия: '.$value['surname'].'<br>Имя: '.$value['name'].'<br>Отчество: '.$value['secondname'].'<br>Дата заезда: '.date("d.m.Y", $checkin).'<br>Дата отъезда: '.date("d.m.Y", $checkout).'<br>"
                }

                );});</script>';

            $dop=0;
        }

        return $divs;
    }


    /**
     * @return array
     */
    public function getDataLine()
    {
        $count_after = 68;
        $data_array = array();
        $grid = (int)Yii::$app->request->get('grid');
        $time = time();
        $cdate = (int)Yii::$app->request->get('cdate');

        if ($cdate!=''){
            $sdate = preg_split('/-/', $cdate);
            $ndate = mktime(00, 00, 00, $sdate[1], $sdate[0], $sdate[2]);
            $time = $ndate;
        }

        $day = 60*60*24;

        if ($grid == 0){
            $data_array = array(
                0=>$time-$day*5,
                1=>$time-$day*4,
                2=>$time-$day*3,
                3=>$time-$day*2,
                4=>$time-$day,
                5=>$time,
            );

            (int)$y = 0;

            for ($i=6; $i<=$count_after+5; $i++){
                $y++;
                array_push($data_array, $time+$day*$y);
            }
        }

        elseif ($grid>0){
            if ($grid == 1){
                $last = $time+$day*$count_after;
            }
            elseif ($grid>1){
                $last = $time+$day*$count_after+($grid-1)*(count($data_array)+1)*$day;
            }
            for ($i=0; $i<=($count_after+5); $i++){
                array_push($data_array, $last+$i*$day);
            }
        }

        elseif ($grid<0){
            if ($grid == -1){
                $first = $time-$day*($count_after+5+6);
            }
            if  ($grid<-1){
                $first = $time-$day*5+($grid*($count_after+5+1)*$day);
            }
            for ($i=0; $i<=($count_after+5); $i++){
                array_push($data_array, $first+$i*$day);
            }
        }

        return $data_array;
    }



}