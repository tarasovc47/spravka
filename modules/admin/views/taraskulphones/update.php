<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Taraskulphones */

$this->title = 'Update Taraskulphones: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Taraskulphones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="taraskulphones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
