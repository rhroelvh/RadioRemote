<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Boat */

$this->title = 'Update Boat: ' . $model->boat_id;
$this->params['breadcrumbs'][] = ['label' => 'Boats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->boat_id, 'url' => ['view', 'id' => $model->boat_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="boat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
