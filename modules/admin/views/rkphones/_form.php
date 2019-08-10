<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rkphones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rkphones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'department')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'subdepartment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'position')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fullname')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'phone')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'email')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'shedule')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
