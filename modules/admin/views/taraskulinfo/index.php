<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TaraskulinfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Taraskulinfos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taraskulinfo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Taraskulinfo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title:ntext',
            'content:ntext',
            'address:ntext',
            'phone:ntext',
            //'email:ntext',
            //'site:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
