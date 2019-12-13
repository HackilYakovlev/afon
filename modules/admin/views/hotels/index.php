<div class="top_dashboard">
    <ul id="yw3">
        <li><a class="btn btn-lg btn-success" href="/admin/visualizer">Визуализатор<span></span></a></li>
        <li class="active"><a class="btn btn-lg btn-success" href="/admin/hotels/index">План загрузки<span></span></a></li>
        <li><span class="btn btn-lg btn-success " onclick="makeReserve()">Зарезервировать<span></span></span></li>
    </ul>
</div>
<div class="gotokeeper">
    <div class="goto">
        <a class="button" href="/admin/hotel/index/grid/-1">Назад</a>
        <input type="text" class="calendar" value="11/12/2019" id="dp1432831287556">
        <a class="button" href="/admin/hotel/index/grid/1">Вперед</a>
    </div>
</div>
<div id="page">

<div class="content">

<div class="reserve_content">
<table>
    <tr class="first">
        <td width="250px">&nbsp;</td>
        <td>Месяц</td>
        <?php
        $month = array(
            '01'=>'Январь',
            '02'=>'Февраль',
            '03'=>'Март',
            '04'=>'Апрель',
            '05'=>'Май',
            '06'=>'Июнь',
            '07'=>'Июль',
            '08'=>'Август',
            '09'=>'Сентяб',
            '10'=>'Октя<br>брь',
            '11'=>'Ноя<br>брь',
            '12'=>'Дек',
        );
        $last = '';
        foreach ($date_line as $mkey=>$mvalue)
        {
            $current  = date('m', $mvalue);
            $new_date = preg_replace_callback("/([a-zA-Z0-9_]+)/", function($match) use ($month)
            {
                return isset($month[$match[1]]) ? $month[$match[1]] : $match[0];
            }, $current);

            if ($new_date!=$last)
            {
                echo '<td style="width: 50px;overflow: hidden;text-align:center; border-right:0px;" title="'.date("d.m.Y", $mvalue).'">'.$new_date.'</td>';
            }
            else
            {
                echo '<td style="width: 50px;overflow: hidden;text-align:center;border:0px;" title="'.date("d.m.Y", $mvalue).'">&nbsp;</td>';
            }
            $last=$new_date;

        }
        ?>
    </tr>

    <tr>
        <td class="first">

            <select>
                <option selected>Расшифровка цветов</option>
                <option style="color:#2494E1;">Забронировано</option>
                <option style="color:#999999;">Выселен</option>
                <option style="color:green;">Заселился</option>
                <option style="color:yellow;">Поселен автоматически</option>
            </select>
        </td>
        <td style="text-align:center;">День</td>
        <?php

        foreach ($date_line as $key=>$value)
        {
            $days = array(
                'Sun'=>'Вс',
                'Mon'=>'Пон',
                'Tue'=>'Вт',
                'Wed'=>'Ср',
                'Thu'=>'Чт',
                'Fri'=>'Пт',
                'Sat'=>'Сб',
            );

            $current  = date('d D', $value);

            $new_date = preg_replace_callback("/([a-zA-Z0-9_]+)/", function($match) use ($days)
            {
                return isset($days[$match[1]]) ? $days[$match[1]] : $match[0];
            }, $current);

            $style = '';

            if ($value==time())
            {
                $style = 'style="border:5px solid red; border-radius:20px; padding:1px; background-color: cyan;"';
            }

            echo '<td '.$style.' class="data_line_day_top" id="top_'.$value.'"  title="'.date("d.m.Y", $value).'"><span>'.$new_date.'</span></td>';
        }
        ?>
    </tr>
    <?php

if (!empty($hotel_list))
{
    foreach ($hotel_list as $hotelkey=>$hotelvalue)
    {
        echo '<tr>';
        echo '<td onclick=showFloors("'.$hotelkey.'"); class="m"><b>'.$hotelvalue['hotelname'].'</b></td>';
        echo '</tr>';

        if (isset($hotelvalue['floors']))
        {
            foreach ($hotelvalue['floors'] as $floorkey=>$floorvalue)
            {
                echo '<tr class="f_'.$hotelkey.' ph_'.$hotelkey.'"  '.\app\models\Hotel::checkState('hotel', $hotelkey).'>';
                echo '<td onclick=showRooms("'.$floorkey.'"); class="m"><img src="/images/row.png"><i>Этаж № '.$floorvalue['floornum'].'</i></td>';
                echo '</tr>';

                if (isset($floorvalue['rooms']))
                {
                    foreach ($floorvalue['rooms'] as $roomkey=>$roomvalue)
                    {
                        echo '<tr class="r_'.$floorkey.' pf_'.$floorkey.' ph_'.$hotelkey.'" '.\app\models\Hotel::checkState('floor', $floorkey).'">';
                        echo '<td class="m"><div class="label-keeper" onclick=showBeds("'.$roomkey.'");><img src="/images/row.png"><img src="/images/row.png">Комната № '.$roomvalue['roomnum'].'</div>'.Yii::$app->hotelhelper->getRoomState($roomvalue['roomstate'], $roomvalue['roomid']).'</td>';
                        echo '</tr>';

                        if (isset($roomvalue['beds']))
                        {
                            foreach ($roomvalue['beds'] as $bedkey=>$bedvalue)
                            {
                                echo '<tr class="m b_'.$roomkey.' pr_'.$roomkey.' pf_'.$floorkey.' ph_'.$hotelkey.'" '.\app\models\Hotel::checkState('room', $roomkey).'">';
                                echo '<td><div class="label-keeper"><img src="/images/row.png"><img src="/images/row.png"><img src="/images/row.png">Кровать '.$bedvalue['bedname'].'</div>'.Yii::$app->hotelhelper->getRoomState($roomvalue['roomstate'], $roomvalue['roomid'], 1).'</td>';
                                echo '<td>'.Yii::$app->hotelhelper->drawReserveDiv($bedvalue['bedid']).'</td>';

                                foreach ($date_line as $key=>$value)
                                {
                                    echo '<td id="'.$bedvalue['bedid'].'" onclick="makeReserve('.$bedvalue['bedid'].', '.$value.');" class="data_line_day">'.date('d', $value).'</td>';
                                }

                                echo '</tr>';
                            }
                        }
                    }
                }
            }
        }
    }
}

?>
</table>
</div>

    </div>

</div>