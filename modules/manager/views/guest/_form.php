<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Guest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="guest-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'secondname')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'nameeng')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'surnameeng')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'dayofbirth')->textInput() ?>

    <?= $form->field($model, 'monthofbirth')->textInput() ?>

    <?= $form->field($model, 'yearofbirth')->textInput() ?>

    <?= $form->field($model, 'residentcountryid')->textInput() ?>

    <?= $form->field($model, 'passportseries')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'workpositionid')->textInput() ?>

    <?= $form->field($model, 'regionfrom')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'createddate')->textInput() ?>

    <?= $form->field($model, 'statusid')->textInput() ?>

    <?= $form->field($model, 'sourceid')->textInput() ?>

    <?= $form->field($model, 'settled')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'dateofbirth')->textInput() ?>

    <?= $form->field($model, 'checkindate')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'checkoutdate')->textInput(['maxlength' => 255]) ?>

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

    <?= $form->field($model, 'anketadate')->textInput(['maxlength' => 255]) ?>

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

    <?= $form->field($model, 'usersender')->textInput() ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'changed')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
