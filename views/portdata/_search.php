<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PortdataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="portdata-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'portData_id') ?>

    <?= $form->field($model, 'portData_switchPortId') ?>

    <?= $form->field($model, 'portData_troughput') ?>

    <?= $form->field($model, 'portData_connected') ?>

    <?= $form->field($model, 'portData_error') ?>

    <?php // echo $form->field($model, 'portData_timeStamp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
