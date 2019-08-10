<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RkphonesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rkphones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rkphones-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rkphones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'department:ntext',
            'subdepartment:ntext',
            'position:ntext',
            'fullname:ntext',
            'phone:ntext',
            'email:ntext',
            'shedule:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
