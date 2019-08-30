<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Taraskulinfo */

$this->title = 'Update Taraskulinfo: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Taraskulinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="taraskulinfo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
