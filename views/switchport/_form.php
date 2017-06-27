<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Switchport */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="switchport-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'switchPort_switchId')->textInput() ?>

    <?= $form->field($model, 'switchPort_speed')->textInput() ?>

    <?= $form->field($model, 'switchPort_description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
