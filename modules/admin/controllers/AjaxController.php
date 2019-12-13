<?php

namespace app\modules\admin\controllers;

use app\models\Floor;
use app\models\Room;
use app\models\Bed;
use yii\helpers\ArrayHelper;
use yii\web\Controller;

class AjaxController extends Controller
{
    public function actionGetfloor()
    {
        $floors_array = array();
        $hotelid = (int)$_GET['hotelid'];
        $floors = Floor::find()
            ->filterWhere(['hotelid'=>$hotelid])
            ->all();
        foreach ($floors as $fk=>$fv)
        {
            $floors_array[$fv['id']] = $fv['floornum'];
        }
        return json_encode($floors_array);
    }

    public function actionGetroom()
    {
        $floorid = (int)$_GET['floorid'];
        $rooms = Room::find()->filterWhere(['floorid'=>$floorid])->all();
        $rooms_array = array();
        foreach ($rooms as $rk=>$rv)
        {
            $rooms_array[$rv->id] = $rv->roomnum;
        }
        echo json_encode($rooms_array);
        exit;
    }

    public function actionGetbed()
    {
        $roomid = (int)$_GET['roomid'];
        $beds = Bed::find()->filterWhere(['roomid'=>$roomid])->all();
        $beds_array = array();
        foreach ($beds as $bk=>$bv)
        {
            $beds_array[$bv->id] = $bv->bedname;
        }
        echo json_encode($beds_array);
    }

}