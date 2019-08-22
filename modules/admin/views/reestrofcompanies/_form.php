<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reestrofcompanies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reestrofcompanies-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'typeofactivity')->textInput() ?>

    <?= $form->field($model, 'numberresource')->textInput() ?>

    <?= $form->field($model, 'presencezone')->textInput() ?>

    <?= $form->field($model, 'clients')->textInput() ?>

    <?= $form->field($model, 'services')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
