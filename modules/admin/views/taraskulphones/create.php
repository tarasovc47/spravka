<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Taraskulphones */

$this->title = 'Create Taraskulphones';
$this->params['breadcrumbs'][] = ['label' => 'Taraskulphones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taraskulphones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
