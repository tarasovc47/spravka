<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\models\Rkphones;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\controllers\SiteController;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap my-container">
    <?php
    NavBar::begin([
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
            ['label' => 'Телефонный справочник', 'url' => ['/site/index']],
            ['label' => 'Тараскуль', 'url' => ['/site/taraskul']],
            ['label' => 'ТСЖ-Сервис', 'url' => ['/site/about']],
            ['label' => 'Инструкция оператора', 'url' => ['/site/about']],
            ['label' => 'Общие вопросы', 'url' => ['/site/obschie']],
            ['label' => 'Юридические лица', 'url' => ['/site/about']],
            ['label' => 'Физические лица', 'url' => ['/site/about']],
            ['label' => 'Приложения', 'url' => ['/site/about']],
            ['label' => 'Акции', 'url' => ['/site/about']],
            ['label' => 'Зона присутствия', 'url' => ['/site/about']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Админка', 'url' => ['/admin']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();

    ?>

    <div class="row">
        <div class="col-sm-2 col-md-2 my-sidebar">
            <?= SiteController::renderSidebar() ?>
        </div>
        <div class="container my-container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

<!--<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?/*= date('Y') */?></p>

        <p class="pull-right"><?/*= Yii::powered() */?></p>
    </div>
</footer>
-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
