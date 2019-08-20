<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\ImageUpload;

/* @var $this yii\web\View */
/* @var $model app\models\Obschie */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Obschies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
if (ImageUpload::fileExist($model->image)){
    echo "file exist";
}
else echo "not exist";
?>
<div class="obschie-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Загрузить/заменить изображение', ['set-image', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Удалить изображение', ['delete-image', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title:ntext',
            'content:ntext',
            [
                'format' => 'html',
                'label' => 'image',
                'value' => function($data){
                    return Html::img($data->getImage(), ['width' => 300]);
                },
            ],
            'note:ntext',
        ],
    ]) ?>

</div>
