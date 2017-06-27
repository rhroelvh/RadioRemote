<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Boat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="boat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'boat_imo')->textInput() ?>

    <?= $form->field($model, 'boat_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
