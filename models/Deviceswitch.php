<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "switch".
 *
 * @property integer $switch_deviceId
 * @property string $switch_ip
 */
class Deviceswitch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'switch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['switch_ip'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'switch_deviceId' => 'Switch Device ID',
            'switch_ip' => 'Switch Ip',
        ];
    }
}
