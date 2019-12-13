<?php

namespace app\models;
use karpoff\icrop\CropImageUploadBehavior;

use Yii;

/**
 * This is the model class for table "guest".
 *
 * @property integer $id
 * @property string $name
 * @property string $secondname
 * @property string $surname
 * @property string $nameeng
 * @property string $surnameeng
 * @property integer $dayofbirth
 * @property integer $monthofbirth
 * @property integer $yearofbirth
 * @property integer $residentcountryid
 * @property string $passportseries
 * @property integer $workpositionid
 * @property string $regionfrom
 * @property integer $createddate
 * @property integer $statusid
 * @property integer $sourceid
 * @property integer $settled
 * @property string $email
 * @property integer $dateofbirth
 * @property string $checkindate
 * @property string $checkoutdate
 * @property string $extra
 * @property string $placeofbirth
 * @property string $krestname
 * @property string $monahname
 * @property string $san
 * @property string $krestplace
 * @property string $krestyear
 * @property string $communion
 * @property string $churchyear
 * @property string $mychurch
 * @property integer $maritalstatusid
 * @property integer $disease
 * @property string $diseasedescription
 * @property string $residentialaddress
 * @property string $homephone
 * @property string $workphone
 * @property string $mobilephone
 * @property string $skype
 * @property string $education
 * @property string $degree
 * @property string $institution
 * @property string $specialty
 * @property string $workplace
 * @property string $position
 * @property string $passportnumber
 * @property string $passportissued
 * @property string $dateofissue
 * @property string $expires
 * @property string $schengenvisa
 * @property string $shengencountry
 * @property string $visatermination
 * @property string $visacitydraw
 * @property string $goalpilgrimage
 * @property integer $visitscount
 * @property string $lastvisit
 * @property string $birthsurname
 * @property string $nationality
 * @property string $citizenship
 * @property string $citizenshipnow
 * @property string $ukrainpassportnumber
 * @property string $wife
 * @property string $fiomaidenname
 * @property string $placeofbirthvisa
 * @property string $childrens
 * @property string $father
 * @property string $mother
 * @property string $parentsfio
 * @property string $etcvisa
 * @property string $previousstay
 * @property string $transitroute
 * @property string $modeoftransport
 * @property string $anketadate
 * @property integer $qualityid
 * @property integer $shengen
 * @property integer $pgroup
 * @property string $pgroupcode
 * @property integer $zagranend
 * @property string $countryresolution
 * @property string $typeofpassport
 * @property integer $roomtype
 * @property integer $sum
 * @property integer $managerid
 * @property integer $resolution
 * @property integer $issueddiamonitirion
 * @property integer $usersender
 * @property string $photo
 * @property integer $changed
 * @property integer $adminid
 */
class Guest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guest';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['photo'], 'required'],
            ['photo', 'file', 'extensions' => 'jpg, jpeg, gif, png', 'on' => ['insert', 'update']],
            [['dayofbirth', 'monthofbirth', 'yearofbirth', 'residentcountryid', 'workpositionid', 'createddate', 'statusid', 'sourceid', 'settled', 'dateofbirth', 'maritalstatusid', 'disease', 'visitscount', 'qualityid', 'shengen', 'pgroup', 'zagranend', 'roomtype', 'sum', 'managerid', 'resolution', 'issueddiamonitirion', 'usersender', 'changed', 'adminid'], 'integer'],
            [['extra', 'goalpilgrimage'], 'string'],
            [['name', 'secondname', 'surname', 'nameeng', 'surnameeng', 'passportseries', 'regionfrom', 'email', 'checkindate', 'checkoutdate', 'placeofbirth', 'krestname', 'monahname', 'san', 'krestplace', 'krestyear', 'communion', 'churchyear', 'mychurch', 'diseasedescription', 'residentialaddress', 'homephone', 'workphone', 'mobilephone', 'skype', 'education', 'degree', 'institution', 'specialty', 'workplace', 'position', 'passportnumber', 'passportissued', 'dateofissue', 'expires', 'schengenvisa', 'shengencountry', 'visatermination', 'visacitydraw', 'lastvisit', 'birthsurname', 'nationality', 'citizenship', 'citizenshipnow', 'ukrainpassportnumber', 'wife', 'fiomaidenname', 'placeofbirthvisa', 'childrens', 'father', 'mother', 'parentsfio', 'etcvisa', 'previousstay', 'transitroute', 'modeoftransport', 'anketadate', 'pgroupcode', 'countryresolution', 'typeofpassport', 'photo'], 'string', 'max' => 255]
        ];
    }



    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo'=>'Фотография',
            'roomtype'=>'Тип комнаты',
            'checkindate' => 'Дата заезда (день/месяц/год)',
            'checkoutdate' => 'Дата отьезда (день/месяц/год)',
            'extra' => 'Дополнительно',
            'name' => 'Имя *',
            'secondname' => 'Отчество *',
            'surname' => 'Фамилия *',
            'dateofbirth'=>'Дата рождения',
            'placeofbirth'=>'Место рождения',
            'krestname'=>'Имя при крещении',
            'monahname'=>'Монашеское имя',
            'san'=>'Сан',
            'krestplace'=>'Место крещения и Храм',
            'krestyear'=>'Год крещения',
            'сommunion'=>'Вероисповедание',
            'churchyear'=>'Год вооцерковления',
            'mychurch'=>'Посещаю Храм',
            'surnameeng' => 'Фамилия как в загранпаспорте',
            'nameeng' => 'Имя как в загранпаспорте',
            'passportseries' => 'Серия пасспорта',
            'workpositionid' => 'Специальность',
            'residentcountryid' => 'Страна проживания',
            'regionfrom' => 'Регион проживания',
            'createddate' => 'Дата добавления',
            'dateofbirth' => 'Дата рождения (день/месяц/год)',
            'maritalstatus' => 'Семейное положение',
            'maritalstatusid' => 'Семейное положение',
            'statusid'=>'Статус',
            'settled'=>'Поселен',
            'sourceid'=>'Источник',
            'disease' => 'Наличие болезней, требующих регулярного приема лекарств',
            'diseasedescription'=>'Если да, то какие болезни',
            'residentialaddress'=>'Адрес проживания',
            'homephone'=>'Домашний телефон',
            'workphone'=>'Рабочий телефон',
            'mobilephone'=>'Мобильный телефон',
            'email'=>'E-mail',
            'skype'=>'Skype',
            'education'=>'Образование',
            'institution'=>'Название учебного заведения',
            'degree'=>'Учена степень (звание)',
            'specialty'=>'Специальность',
            'position'=>'Должность',
            'workplace'=>'Место работы',
            'passportnumber'=>'Номер загранпаспорта',
            'passportissued'=>'Кто выдал паспорт',
            'dateofissue'=>'Дата выдачи',
            'expires'=>'Действителен до',
            'schengenvisa'=>'Наличие визы шенгенской зоны',
            'shengencountry'=>'Какой страны',
            'visatermination'=>'Срок окончания визы',
            'visacitydraw'=>'В каком городе будете оформлять',
            'goalpilgrimage'=>'Цель паломнической поездки на Святую Гору Афон (подробно по дням)',
            'visitscount'=>'Сколько раз вы уже были на Афоне',
            'lastvisit'=>'Когда были последний раз',
            'birthsurname'=>'Фамилия при рождении',
            'nationality'=>'Национальность',
            'citizenship'=>'Гражданство (при рождении)',
            'citizenshipnow'=>'Гражданство (в данный момент)',
            'ukrainpassportnumber'=>'Номер паспорта (гражданина Украины)',
            'wife'=>'Жена (если в настоящее время состоит в браке)',
            'fiomaidenname'=>'Ф.И.О + (девичья фамилия)',
            'placeofbirthvisa'=>'Дата и место рождения',
            'childrens'=>'Дети: (Ф.И.О. и дата рождения)',
            'parentsfio'=>'Фамилия и имя родителей (независимо от того, живы они или умерли)',
            'father'=>'Отец',
            'mother'=>'Мать',
            'countryresolution'=>'Если вы живете в стране, которая не является вашей родиной, имеете ли вы разрешение на возвращение в эту страну',
            'typeofpassport'=>'Тип загранпаспорта',
            'etcvisa'=>'Другие визы полученные за последние 3 года и на какой срок',
            'previousstay'=>'Предыдущее пребывание в Греции или других странах участницах шенгенского соглашения',
            'transitroute'=>'Граница въезда или маршрут транзита',
            'modeoftransport'=>'Вид транспорта',
            'anketadate'=>'Дата',
            'quality'=>'Положение в обществе',
            'status'=>'Семейное положение',
            'shengen'=>'Есть ли у Вас виза страны Шенгенского договора на время паломнической поездки на Святую Гору Афон?',
            'pgroupcode'=>'Введите код группы',
            'sum'=>'Сумма',
            'resolution'=>'Разрешение нашего монастыря',
            'issueddiamonitirion'=>'Выдавший диамонитирион',
            'usersender'=>'Отправитель',
        ];
    }

//    function behaviors()
//    {
//        return [
//            [
//                'class' => CropImageUploadBehavior::className(),
//                'attribute' => 'photo',
//                'scenarios' => ['insert', 'update'],
//                'path' => '@webroot/upload/docs',
//                'url' => '@web/upload/docs',
//                'ratio' => 1,
////              'сrop_field' => 'photo_crop',
////               'cropped_field' => 'photo_cropped',
//            ],
//        ];
//    }


}
