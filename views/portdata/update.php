<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Portdata */

$this->title = 'Update Portdata: ' . $model->portData_id;
$this->params['breadcrumbs'][] = ['label' => 'Portdatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->portData_id, 'url' => ['view', 'id' => $model->portData_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="portdata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
