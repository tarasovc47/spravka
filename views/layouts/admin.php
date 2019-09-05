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
            'class' => 'navbar navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
            ['label' => 'Телефонный справочник', 'url' => ['/admin/rkphones']],
            ['label' => 'Тараскуль', 'url' => ['/site/taraskul']],
            //['label' => 'Тараскуль_sql', 'url' => ['/admin/taraskulinfo']],
            ['label' => 'Тараскуль_sql', 'items' =>
                ['label' => 'Тараскуль Общая информация', 'url' => '/admin/taraskulinfo'],
                ['label' => 'Тараскуль Сотрудники', 'url' => '/admin/taraskulphones'],
                ['label' => 'Тараскуль спальные корпусы', 'url' => '/admin/taraskulcorpus'],
            ],
            ['label' => 'ТСЖ-Сервис', 'url' => ['/site/about']],
            ['label' => 'Инструкция оператора', 'url' => ['/site/about']],
            ['label' => 'Общие вопросы', 'url' => ['/admin/obschie']],
            ['label' => 'Юридические лица', 'url' => ['/site/about']],
            ['label' => 'Физические лица', 'url' => ['/site/about']],
            ['label' => 'Приложения', 'url' => ['/site/about']],
            ['label' => 'Акции', 'url' => ['/site/about']],
            ['label' => 'Зона присутствия', 'url' => ['/site/about']],
            Yii::$app->user->isGuest ? (
            ['label' => 'Админка', 'url' => ['/site/login']]
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
    </footer>-->

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
