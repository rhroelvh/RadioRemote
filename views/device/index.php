<?php

use app\models\Boat;
use app\models\DeviceSearch;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\Pjax;

/* @var $this View */
/* @var $searchModel DeviceSearch */
/* @var $dataProvider ActiveDataProvider */

$this->title = 'Devices';
$this->params['breadcrumbs'][] = $this->title;

$boten = ArrayHelper::map(Boat::find()->all(), 'boat_id', 'boat_name');
?>
<div class="device-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);    ?>

    <p>
        <?= Html::a('Create Device', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'device_id',
            [
                'attribute' => 'device_idBoat',
                //'filterType' => GridView::FILTER_SELECT2,
                'filter' => $boten,
                'value' => 'deviceIdBoat.boat_name',
               // 'value' => 'klantType.klanttype_beschrijving',
                //'filterWidgetOptions' => [
                //    'pluginOptions' => ['allowClear' => true],
                //],
                //'filterInputOptions' => ['placeholder' => 'Type'],
            ],
            //'device_idBoat',
            'device_manufacturer',
            'device_model',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
    <?php Pjax::end(); ?></div>
