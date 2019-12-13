<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Guest */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Паломники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guest-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                //'confirm' => 'Are you sure you want to delete this item?',
                'confirm' => 'Удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'secondname',
            'surname',
            'nameeng',
            'surnameeng',
            'dayofbirth',
            'monthofbirth',
            'yearofbirth',
            'residentcountryid',
            'passportseries',
            'workpositionid',
            'regionfrom',
            'createddate',
            'statusid',
            'sourceid',
            'settled',
            'email:email',
            'dateofbirth',
            'checkindate',
            'checkoutdate',
            'extra:ntext',
            'placeofbirth',
            'krestname',
            'monahname',
            'san',
            'krestplace',
            'krestyear',
            'communion',
            'churchyear',
            'mychurch',
            'maritalstatusid',
            'disease',
            'diseasedescription',
            'residentialaddress',
            'homephone',
            'workphone',
            'mobilephone',
            'skype',
            'education',
            'degree',
            'institution',
            'specialty',
            'workplace',
            'position',
            'passportnumber',
            'passportissued',
            'dateofissue',
            'expires',
            'schengenvisa',
            'shengencountry',
            'visatermination',
            'visacitydraw',
            'goalpilgrimage:ntext',
            'visitscount',
            'lastvisit',
            'birthsurname',
            'nationality',
            'citizenship',
            'citizenshipnow',
            'ukrainpassportnumber',
            'wife',
            'fiomaidenname',
            'placeofbirthvisa',
            'childrens',
            'father',
            'mother',
            'parentsfio',
            'etcvisa',
            'previousstay',
            'transitroute',
            'modeoftransport',
            'anketadate',
            'qualityid',
            'shengen',
            'pgroup',
            'pgroupcode',
            'zagranend',
            'countryresolution',
            'typeofpassport',
            'roomtype',
            'sum',
            'managerid',
            'resolution',
            'issueddiamonitirion',
            'usersender',
            'photo',
            'changed',
            'adminid',
        ],
    ]) ?>

</div>
