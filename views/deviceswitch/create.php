<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Deviceswitch */

$this->title = 'Create Deviceswitch';
$this->params['breadcrumbs'][] = ['label' => 'Deviceswitches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deviceswitch-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
