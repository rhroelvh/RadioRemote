<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Switchport */

$this->title = 'Create Switchport';
$this->params['breadcrumbs'][] = ['label' => 'Switchports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="switchport-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
