<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Taraskulcorpus */

$this->title = 'Create Taraskulcorpus';
$this->params['breadcrumbs'][] = ['label' => 'Taraskulcorpuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taraskulcorpus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
