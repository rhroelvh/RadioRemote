<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Portdata */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="portdata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'portData_switchPortId')->textInput() ?>

    <?= $form->field($model, 'portData_troughput')->textInput() ?>

    <?= $form->field($model, 'portData_connected')->textInput() ?>

    <?= $form->field($model, 'portData_error')->textInput() ?>

    <?= $form->field($model, 'portData_timeStamp')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
