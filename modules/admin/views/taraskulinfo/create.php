<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Taraskulinfo */

$this->title = 'Create Taraskulinfo';
$this->params['breadcrumbs'][] = ['label' => 'Taraskulinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taraskulinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
