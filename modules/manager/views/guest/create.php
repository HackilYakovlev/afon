<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Guest */

$this->title = 'Добавление паломника';
$this->params['breadcrumbs'][] = ['label' => 'Паломники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="guest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
