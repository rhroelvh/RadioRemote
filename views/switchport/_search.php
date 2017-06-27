<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SwitchportSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="switchport-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'switchPort_id') ?>

    <?= $form->field($model, 'switchPort_switchId') ?>

    <?= $form->field($model, 'switchPort_speed') ?>

    <?= $form->field($model, 'switchPort_description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
