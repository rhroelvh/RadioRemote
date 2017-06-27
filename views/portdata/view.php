<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Portdata */

$this->title = $model->portData_id;
$this->params['breadcrumbs'][] = ['label' => 'Portdatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portdata-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->portData_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->portData_id], [
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
            'portData_id',
            'portData_switchPortId',
            'portData_troughput',
            'portData_connected',
            'portData_error',
            'portData_timeStamp',
        ],
    ]) ?>

</div>
