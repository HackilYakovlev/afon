<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GuestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Паломники';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guest-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить паломника', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'secondname',
            'surname',
            'nameeng',
            // 'surnameeng',
            // 'dayofbirth',
            // 'monthofbirth',
            // 'yearofbirth',
            // 'residentcountryid',
            // 'passportseries',
            // 'workpositionid',
            // 'regionfrom',
            // 'createddate',
            // 'statusid',
            // 'sourceid',
            // 'settled',
            // 'email:email',
            // 'dateofbirth',
            // 'checkindate',
            // 'checkoutdate',
            // 'extra:ntext',
            // 'placeofbirth',
            // 'krestname',
            // 'monahname',
            // 'san',
            // 'krestplace',
            // 'krestyear',
            // 'сommunion',
            // 'churchyear',
            // 'mychurch',
            // 'maritalstatusid',
            // 'disease',
            // 'diseasedescription',
            // 'residentialaddress',
            // 'homephone',
            // 'workphone',
            // 'mobilephone',
            // 'skype',
            // 'education',
            // 'degree',
            // 'institution',
            // 'specialty',
            // 'workplace',
            // 'position',
            // 'passportnumber',
            // 'passportissued',
            // 'dateofissue',
            // 'expires',
            // 'schengenvisa',
            // 'shengencountry',
            // 'visatermination',
            // 'visacitydraw',
            // 'goalpilgrimage:ntext',
            // 'visitscount',
            // 'lastvisit',
            // 'birthsurname',
            // 'nationality',
            // 'citizenship',
            // 'citizenshipnow',
            // 'ukrainpassportnumber',
            // 'wife',
            // 'fiomaidenname',
            // 'placeofbirthvisa',
            // 'childrens',
            // 'father',
            // 'mother',
            // 'parentsfio',
            // 'etcvisa',
            // 'previousstay',
            // 'transitroute',
            // 'modeoftransport',
            // 'anketadate',
            // 'qualityid',
            // 'shengen',
            // 'pgroup',
            // 'pgroupcode',
            // 'zagranend',
            // 'countryresolution',
            // 'typeofpassport',
            // 'roomtype',
            // 'sum',
            // 'managerid',
            // 'resolution',
            // 'issueddiamonitirion',
            // 'usersender',
            // 'photo',
            // 'changed',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
