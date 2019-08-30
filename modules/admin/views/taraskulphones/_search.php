<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TaraskulphonesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="taraskulphones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'department') ?>

    <?= $form->field($model, 'position') ?>

    <?= $form->field($model, 'fullname') ?>

    <?= $form->field($model, 'insidephone') ?>

    <?php // echo $form->field($model, 'outsidephone') ?>

    <?php // echo $form->field($model, 'floor') ?>

    <?php // echo $form->field($model, 'room') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
