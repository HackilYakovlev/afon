<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php $this->registerJsFile(Yii::$app->request->baseUrl.'/js/main.js',['depends' => [\yii\web\JqueryAsset::className()]]); ?>
    <?php $this->registerJsFile(Yii::$app->request->baseUrl.'/js/jquery-ui.js',['depends' => [\yii\web\JqueryAsset::className()]]); ?>
</head>
<body>

<?php $this->beginBody() ?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'AFONIT 2.0.1',
        'brandUrl' => '/admin/',
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => Yii::t('app', 'Guests'), 'url' => ['/admin/guests/index']],
            ['label' => Yii::t('app', 'Hotels'), 'url' => ['/admin/hotels/index']],
            ['label' => Yii::t('app', 'Free places'), 'url' => ['/admin/places/index']],
            ['label' => Yii::t('app', 'Statistics'), 'items' => [
                ['label' => Yii::t('app', 'Guests'), 'url' => ['/admin/statistics/guest']],
                ['label' => Yii::t('app', 'Hotels'), 'url' => ['/admin/statistics/hotel']],
            ]],
            ['label' => Yii::t('app', 'Settings'), 'url'=>['/admin/settings/index']],
            Yii::$app->user->isGuest ?
                ['label' => Yii::t('app', 'Sign In'), 'url' => ['/admin/access/login']] :
                ['label' => Yii::t('app', 'Sign Out').'(' . Yii::$app->user->identity->email . ')',
                    'url' => ['/admin/access/logout'],
                    'linkOptions' => ['data-method' => 'post']],

        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Afonit <?= date('Y') ?></p>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
