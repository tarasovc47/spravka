<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Taraskulphones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="taraskulphones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'department')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'position')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fullname')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'insidephone')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'outsidephone')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'floor')->textInput() ?>

    <?= $form->field($model, 'room')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
