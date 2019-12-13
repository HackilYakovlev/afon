<?php
/* @var $this yii\web\View */
$this->title = 'Анкета паломника';
$this->registerMetaTag(['name' => 'description', 'content' => 'Курсовые, дипломные, контрольные работы на заказ. У нас работают профессионалы высокого уровня.']);
?>
<div class="site-index">

<div class="body-content">
    <a href="/"><p class="center"><img width="42px" height="56px" src="/images/Panteleimon.jpg"></p></a>
    <p class="center">Во славу Святой, Единосущной, Нераздѣльной и Животворящей Троицы.</p>
    <h1>РУССКИЙ НА АФОНЕ СВЯТО - ПАНТЕЛЕИМОНОВ МОНАСТЫРь</h1>


    <div class="anket-holder">
        <?= $this->render('_available_form', [
            'model' => $model,
        ]) ?>
    </div>

    <?php
    if (isset($_POST['AvailableForm'])){
        echo 'Свободных мест по этим датам :  563';
        echo '<a class="btn btn-primary" href="/site/register?checkin='.$checkin.'&checkout='.$checkout.'">Зарегистрироваться</a>';
    }
    ?>

    </div>
</div>
