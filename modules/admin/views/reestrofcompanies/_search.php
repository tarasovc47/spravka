<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReestrofcompaniesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reestrofcompanies-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'typeofactivity') ?>

    <?= $form->field($model, 'numberresource') ?>

    <?= $form->field($model, 'presencezone') ?>

    <?php // echo $form->field($model, 'clients') ?>

    <?php // echo $form->field($model, 'services') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
