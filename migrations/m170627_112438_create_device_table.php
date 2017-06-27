<?php

use yii\db\Migration;

/**
 * Handles the creation of table `device`.
 */
class m170627_112438_create_device_table extends Migration
{
    

    /*
     * Class vars
     */

    public static $device_idBoat_FK1 = "device_idBoat_FK1";

    /**
     * @inheritdoc
     * Create table device
     */
    public function up() {
        //Create table
        $this->createTable('device', [
            'device_id' => $this->primaryKey(),
            'device_idBoat' => $this->integer()->notNull(),
            'device_manufacturer' => $this->string(),
            'device_model' => $this->string()
        ]);

        //add foreignkey for device_idBoat
        $this->addForeignKey(self::$device_idBoat_FK1, 'device', 'device_idBoat', 'boat', 'boat_id');
    }

    /**
     * @inheritdoc
     * drops table device
     */
    public function down() {
        $this->truncateTable('device');
        $this->dropTable('device');
    }
    
    

}
