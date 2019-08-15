<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rkphones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rkphones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'department')->textInput() ?>

    <?= $form->field($model, 'subdepartment')->textInput() ?>

    <?= $form->field($model, 'position')->textInput() ?>

    <?= $form->field($model, 'fullname')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <?= $form->field($model, 'shedule')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
