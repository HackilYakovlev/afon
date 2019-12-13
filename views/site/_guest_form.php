<?php

use karpoff\icrop\CropImageUpload;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\GuestSender;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Guest */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="guest-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <!--Отправитель-->
    <?= $form->field($model, 'usersender')
        ->dropDownList(
            ArrayHelper::map(GuestSender::find()->all(), 'id', 'sender'),
            ['options' =>
                [
                    0 => ['selected ' => true]
                ]
            ]

        );
    ?>
<!--    --><?//= $form->field($model, 'checkindate')->widget(\yii\jui\DatePicker::classname(), [
//        'language' => 'ru',
//        'dateFormat' => 'dd.MM.yyyy',
//    ]) ?>
<!--    --><?//= $form->field($model, 'checkoutdate')->widget(\yii\jui\DatePicker::classname(), [
//        'language' => 'ru',
//        'dateFormat' => 'dd.MM.yyyy',
//    ]); ?>
    <?= $form->field($model, 'checkindate')->textInput(['readonly' => true]) ?>
    <?= $form->field($model, 'checkoutdate')->textInput(['readonly' => true]) ?>
    <!--Фамилия-->
    <?= $form->field($model, 'surname')->textInput(['maxlength' => 255]) ?>
    <!--Имя-->
    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>
    <!--Отчество (Middlename)-->
    <?= $form->field($model, 'secondname')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'nameeng')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'surnameeng')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'residentcountryid')->textInput() ?>
    <?= $form->field($model, 'passportseries')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'workpositionid')->textInput() ?>
    <?= $form->field($model, 'regionfrom')->textInput(['maxlength' => 255]) ?>
<!----><?//= $form->field($model, 'createddate')->textInput() ?>
    <?= $form->field($model, 'statusid')->textInput() ?>
    <?= $form->field($model, 'sourceid')->textInput() ?>
    <?= $form->field($model, 'settled')->textInput() ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'dateofbirth')->textInput() ?>
    <?= $form->field($model, 'extra')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'placeofbirth')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'krestname')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'monahname')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'san')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'krestplace')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'krestyear')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'communion')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'churchyear')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'mychurch')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'maritalstatusid')->textInput() ?>
    <?= $form->field($model, 'disease')->textInput() ?>
    <?= $form->field($model, 'diseasedescription')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'residentialaddress')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'homephone')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'workphone')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'mobilephone')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'skype')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'education')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'degree')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'institution')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'specialty')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'workplace')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'position')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'passportnumber')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'passportissued')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'dateofissue')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'expires')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'schengenvisa')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'shengencountry')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'visatermination')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'visacitydraw')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'goalpilgrimage')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'visitscount')->textInput() ?>
    <?= $form->field($model, 'lastvisit')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'birthsurname')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'nationality')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'citizenship')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'citizenshipnow')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'ukrainpassportnumber')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'wife')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'fiomaidenname')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'placeofbirthvisa')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'childrens')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'father')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'mother')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'parentsfio')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'etcvisa')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'previousstay')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'transitroute')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'modeoftransport')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'qualityid')->textInput() ?>
    <?= $form->field($model, 'shengen')->textInput() ?>
    <?= $form->field($model, 'pgroup')->textInput() ?>
    <?= $form->field($model, 'pgroupcode')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'zagranend')->textInput() ?>
    <?= $form->field($model, 'countryresolution')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'typeofpassport')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'roomtype')->textInput() ?>
    <?= $form->field($model, 'sum')->textInput() ?>
    <?= $form->field($model, 'managerid')->textInput() ?>
    <?= $form->field($model, 'resolution')->textInput() ?>
    <?= $form->field($model, 'issueddiamonitirion')->textInput() ?>
    <?= $form->field($model, 'photo')->widget(CropImageUpload::className()) ?>
    Мне известно, и я соглашаюсь с тем, что любые мои личные данные, которые содержатся в этой анкете, будут переданы компетентным органам стран Шенгенского Соглашения и в случае необходимости, будут обработаны для вынесения решения относительно предоставления визы. Эта информация может быть внесена и сохранена в базе данных, доступ к которой имеют соответствующие органы стран Шенгенского Соглашения. На мой запрос Консульское Учреждение, которое будет рассматривать мою просьбу, сообщит мне о том, в какой способ я могу реализовать свое право проверить информацию, которая касается меня лично, а также изменить или удалить ее в случае, если эта информация будет неверной, в соответствии с законодательством страны, которая будет рассматривать мою просьбу. Я заявляю, что все приведены мной в анкете данные являются верными и полными. Мне известно, что предоставление неправдивых данных повлечет отказ в моей просьбе или аннуляцию уже выданной визы, а также может быть причиной для привлечения меня к ответственности по закону страны Шенгенского Соглашения. Я гарантирую, что оставлю территорию стран Шенгенского Соглашения с окончанием срока визы, если такая будет предоставлена. Мне известно, что наличие визы является только одной из предпосылок для въезда в Европейскую территорию стран-участниц. Сам факт предоставления мне визы не значит, что я буду иметь право на получение компенсации в случае, если я не соответствую Статьи 5.1 Договора об осуществлении Шенгенского Соглашения и поэтому мне будет запрещен въезд. Наличие предпосылок для въезда проверяется повторно во время передвижения по Европейской территории стран-участниц Шенгенского Соглашения.
    <?= $form->field($model, 'anketadate')->textInput(['maxlength' => 255, 'value'=>date('d.m.Y', time()), 'disabled'=>true]); ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
