<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "switchport".
 *
 * @property integer $switchPort_id
 * @property integer $switchPort_switchId
 * @property integer $switchPort_speed
 * @property string $switchPort_description
 */
class Switchport extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'switchport';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['switchPort_switchId'], 'required'],
            [['switchPort_switchId', 'switchPort_speed'], 'integer'],
            [['switchPort_description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'switchPort_id' => 'Switch Port ID',
            'switchPort_switchId' => 'Switch Port Switch ID',
            'switchPort_speed' => 'Switch Port Speed',
            'switchPort_description' => 'Switch Port Description',
        ];
    }
}
