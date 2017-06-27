<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Switchport */

$this->title = $model->switchPort_id;
$this->params['breadcrumbs'][] = ['label' => 'Switchports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="switchport-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->switchPort_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->switchPort_id], [
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
            'switchPort_id',
            'switchPort_switchId',
            'switchPort_speed',
            'switchPort_description',
        ],
    ]) ?>

</div>
