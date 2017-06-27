<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Portdata */

$this->title = 'Create Portdata';
$this->params['breadcrumbs'][] = ['label' => 'Portdatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portdata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
