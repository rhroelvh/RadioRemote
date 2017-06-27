<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "portdata".
 *
 * @property integer $portData_id
 * @property integer $portData_switchPortId
 * @property integer $portData_troughput
 * @property integer $portData_connected
 * @property integer $portData_error
 * @property string $portData_timeStamp
 */
class Portdata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'portdata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['portData_switchPortId', 'portData_troughput', 'portData_connected', 'portData_error'], 'integer'],
            [['portData_timeStamp'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'portData_id' => 'Port Data ID',
            'portData_switchPortId' => 'Port Data Switch Port ID',
            'portData_troughput' => 'Port Data Troughput',
            'portData_connected' => 'Port Data Connected',
            'portData_error' => 'Port Data Error',
            'portData_timeStamp' => 'Port Data Time Stamp',
        ];
    }
}
