<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Taraskulcorpus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="taraskulcorpus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'floor')->textInput() ?>

    <?= $form->field($model, 'room')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'insidephone')->textarea(['rows' => 1]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
