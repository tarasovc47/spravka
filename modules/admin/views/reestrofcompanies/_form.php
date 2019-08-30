<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reestrofcompanies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reestrofcompanies-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'typeofactivity')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'numberresource')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'presencezone')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'clients')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'services')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'colspan')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
