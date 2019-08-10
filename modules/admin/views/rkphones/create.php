<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rkphones */

$this->title = 'Create Rkphones';
$this->params['breadcrumbs'][] = ['label' => 'Rkphones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rkphones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
