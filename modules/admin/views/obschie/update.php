<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Obschie */

$this->title = 'Update Obschie: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Obschies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="obschie-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
