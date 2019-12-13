<?php
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Button;
?>
<div class="palomniks_list" style="display:none;">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'options' => ['id' => 'palomnik-grid'],
        'columns' => [
            'id',
            'name',
            //'createddate:datetime',
        ],
    ]); ?>

</div><!--Palomnik list-->

<div class="reserve_data">

    <div class="reserveform">
        <?php
        if (isset($_POST['HotelReserve']) && count($model->errors)==0) {
            echo 'Обновляется...<script>window.parent.location.reload();</script>';
            exit;
        }

        $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'form-horizontal'],
            'fieldConfig' => [
                'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                'labelOptions' => ['class' => 'col-lg-1 control-label'],
            ],
        ]); ?>

        <?= $form->field($model, 'guestid')->textInput(['placeholder' => 'Нажмите, чтобы добавить']); ?>
        <?php
        isset($hotelid)?$hotelid:$hotelid=0;
        if (isset($_GET['bedid']) && ((int)$_GET['bedid']>0)){
            echo \app\models\HotelReserve::getHotelSelect($_GET['bedid']);
        }
        else{
            echo $form->field($model, 'hotelid')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Hotel::find()->all(), 'id', 'name'), ['options' =>
                [
                    $hotelid => ['selected ' => true]
                ]
            ]);
        }
        ?>

        <?php
        if (isset($_GET['bedid']) && ((int)$_GET['bedid']>0)){
            echo \app\models\HotelReserve::getFloorSelect($_GET['bedid']);
        }
        else{
            echo $form->field($model, 'floorid')->dropDownList(['prompt'=>'Выберите из списка']);
        }
        ?>

        <?php
        if (isset($_GET['bedid']) && ((int)$_GET['bedid']>0)){
            echo \app\models\HotelReserve::getRoomSelect($_GET['bedid']);
        }
        else{
            echo $form->field($model, 'roomid')->dropDownList(['prompt'=>'Выберите из списка']);
        }
        ?>

        <?php
        if (isset($_GET['bedid']) && ((int)$_GET['bedid']>0)){
            echo \app\models\HotelReserve::getBedSelect($_GET['bedid']);
        }
        else{
            echo $form->field($model, 'bedid')->dropDownList(['prompt'=>'Выберите из списка']);
        }
        ?>

        <?= $form->field($model, 'reservelock', ['template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",])->checkbox() ?>
        <?= $form->field($model, 'evicted', ['template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",])->checkbox() ?>
        <?= $form->field($model, 'checkin')->widget(\yii\jui\DatePicker::classname(), [
            'language' => 'ru',
            'dateFormat' => 'dd.MM.yyyy',
        ]) ?>
        <?= $form->field($model, 'checkout')->widget(\yii\jui\DatePicker::classname(), [
            'language' => 'ru',
            'dateFormat' => 'dd.MM.yyyy',
        ]) ?>
        <input type="hidden" id="HotelReserve_palomnikid" name="realguestid" value="0">
        <input type="hidden" id="bed" name="bed" value=<?=(int)$_GET['bedid']?>>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
        <?php ActiveForm::end() ?>

    </div><!--Reserce form-->
</div><!--Reserve data -->
