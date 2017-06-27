<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "device".
 *
 * @property integer $device_id
 * @property integer $device_idBoat
 * @property string $device_manufacturer
 * @property string $device_model
 */
class Device extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'device';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['device_idBoat'], 'required'],
            [['device_idBoat'], 'integer'],
            [['device_manufacturer', 'device_model'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'device_id' => 'Device ID',
            'device_idBoat' => 'Device Id Boat',
            'device_manufacturer' => 'Device Manufacturer',
            'device_model' => 'Device Model',
        ];
    }
}
