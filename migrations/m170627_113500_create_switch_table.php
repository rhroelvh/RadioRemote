<?php

use yii\db\Migration;

/**
 * Handles the creation of table `switch`.
 */
class m170627_113500_create_switch_table extends Migration {
    /*
     * Class vars
     */

    public static $switch_deviceId_FK1 = "switch_deviceId_FK1";

    /**
     * @inheritdoc
     * create table switch
     */
    public function up() {
        //add columns
        $this->createTable('switch', [
            'switch_deviceId' => $this->primaryKey(),
            'switch_ip' => $this->string()
        ]);

        //add foreignKey
        $this->addForeignKey(self::$switch_deviceId_FK1, 'switch', 'switch_deviceID', 'device', 'device_id');

        //add some data
        $this->insert("switch", ["switch_deviceID" => 1, "switch_ip" => "192.168.0.1"]);
        $this->insert("switch", ["switch_deviceID" => 2, "switch_ip" => "192.168.0.2"]);
    }

    /**
     * @inheritdoc
     * drops table switch
     */
    public function down() {
        $this->truncateTable('switch');
        $this->dropTable('switch');
    }

}
