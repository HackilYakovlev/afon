<?php

namespace app\modules\admin\controllers;

use app\models\Guest;
use app\models\GuestSearch;
use app\models\Hotel;
use app\models\HotelReserve;
use app\models\RoomState;
use yii\helpers\ArrayHelper;
use yii\data\ActiveDataProvider;
use Yii;

use app\components\AdminController;

/**
 * Class HotelController
 * @package app\modules\admin\controllers
 */
class HotelsController extends AdminController
{
    /**
     * @var
     */
    private $_room_states;

    /**
     * @return string
     */
    public function actionIndex()
    {
        $this->_room_states = ArrayHelper::map(RoomState::find()->all(), 'id', 'state');
        $hotel = new Hotel();
        $hotel_list = $hotel->getHotelList();
        $date_line = Yii::$app->hotelhelper->getDataLine();
        return $this->render('index', ['hotel_list'=>$hotel_list, 'date_line'=>$date_line]);
    }

    public function actionReserve()
    {
        //set template empty
        $this->layout = 'empty';

        $model = new HotelReserve();

        if (isset($_GET['bedid'])){
            $bedid = (int)$_GET['bedid'];
        }

        if (isset($_POST['HotelReserve'])){

            $model->setAttributes($_POST['HotelReserve']);
            $model->setAttribute('guestid', $_POST['realguestid']);
            $model->setAttribute('automatic', 0);
            $model->setAttribute('checkin', strtotime($_POST['HotelReserve']['checkin']));
            $model->setAttribute('checkout', strtotime($_POST['HotelReserve']['checkout']));
            if ($model->validate()){
                if ($model->save(false)){

                }
                else{
                    p($model->getErrors());
                    exit;
                }
            }else{
                p($model->getErrors());
                exit;
            }
        }

        #if isset bedid, fill room and hotel dropdown list
        if (isset($_GET['bedid'])){
            $model->hotelid=1;
        }

        $dataProvider = new ActiveDataProvider([
            'query' => Guest::find()->orderBy(['id'=>SORT_DESC]),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('reserve', [
            'dataProvider'=>$dataProvider,
            'model'=>$model
        ]);
    }

    public function actionEditreserve()
    {
        $this->layout = 'empty';
        $model = new HotelReserve();

        $dataProvider = new ActiveDataProvider([
            'query' => Guest::find()->orderBy(['id'=>SORT_DESC]),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('editreserve', [
            'dataProvider'=>$dataProvider,
            'model'=>$model
        ]);
    }

    /**
     *
     */
    public function drawReserveDiv()
    {

    }
}