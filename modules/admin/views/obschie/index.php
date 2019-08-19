<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\ImageUpload;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ObschieSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Obschies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obschie-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Obschie', ['create'], ['class' => 'btn btn-success']) ?>
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
            'image:ntext',
            /*[
                'format' => 'html',
                'label' => 'Image',
                'value' => function($data){
                    return Html::img($data->getImage);
                }
            ],*/
            'note:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
