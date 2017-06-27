<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Deviceswitch */

$this->title = $model->switch_deviceId;
$this->params['breadcrumbs'][] = ['label' => 'Deviceswitches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deviceswitch-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->switch_deviceId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->switch_deviceId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'switch_deviceId',
            'switch_ip',
        ],
    ]) ?>

</div>
