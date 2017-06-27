<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "boat".
 *
 * @property integer $boat_id
 * @property integer $boat_imo
 * @property string $boat_name
 *
 * @property Device[] $devices
 */
class Boat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'boat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['boat_imo'], 'integer'],
            [['boat_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'boat_id' => 'Boat ID',
            'boat_imo' => 'Boat Imo',
            'boat_name' => 'Boat Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDevices()
    {
        return $this->hasMany(Device::className(), ['device_idBoat' => 'boat_id']);
    }
}
