<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Obschie */

$this->title = 'Create Obschie';
$this->params['breadcrumbs'][] = ['label' => 'Obschies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obschie-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
