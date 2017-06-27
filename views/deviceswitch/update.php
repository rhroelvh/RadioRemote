<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Deviceswitch */

$this->title = 'Update Deviceswitch: ' . $model->switch_deviceId;
$this->params['breadcrumbs'][] = ['label' => 'Deviceswitches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->switch_deviceId, 'url' => ['view', 'id' => $model->switch_deviceId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="deviceswitch-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
