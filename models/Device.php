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
 * 
 * 		
 * @property Boat $deviceIdBoat 
 * @property Switch $switch 
 */
class Device extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'device';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['device_idBoat'], 'required'],
            [['device_idBoat'], 'integer'],
            [['device_manufacturer', 'device_model'], 'string', 'max' => 255],
            [['device_idBoat'], 'exist', 'skipOnError' => true, 'targetClass' => Boat::className(), 'targetAttribute' => ['device_idBoat' => 'boat_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'device_id' => 'Device ID',
            'device_idBoat' => 'Device Id Boat',
            'device_manufacturer' => 'Device Manufacturer',
            'device_model' => 'Device Model',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery 
     */
    public function getDeviceIdBoat() {
        return $this->hasOne(Boat::className(), ['boat_id' => 'device_idBoat']);
    }

    /**
     * @return \yii\db\ActiveQuery 
     */
    public function getSwitch() {
        return $this->hasOne(Deviceswitch::className(), ['switch_deviceId' => 'device_id']);
    }

}
