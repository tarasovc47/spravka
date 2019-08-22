<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reestrofcompanies */

$this->title = 'Create Reestrofcompanies';
$this->params['breadcrumbs'][] = ['label' => 'Reestrofcompanies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reestrofcompanies-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
