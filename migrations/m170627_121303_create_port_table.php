<?php

use yii\db\Migration;

/**
 * Handles the creation of table `port`.
 */
class m170627_121303_create_port_table extends Migration {
    /*
     * Class vars
     */
    public static $port_switchId_FK1 = 'port_switchId_FK1';

    /**
     * @inheritdoc
     */
    public function up() {
        $this->createTable('switchPort', [
            'switchPort_id' => $this->primaryKey(),
            'switchPort_switchId' => $this->integer()->notNull(),
            'switchPort_speed' => $this->integer(),
            'switchPort_description' => $this->string()
        ]);

        //add foreignKey
        $this->addForeignKey(self::$port_switchId_FK1, 'switchPort', 'switchPort_switchId', 'switch', 'switch_DeviceID');
    }

    /**
     * @inheritdoc
     */
    public function down() {
        $this->truncateTable('switchPort');
        $this->dropTable('switchPort');
    }

}
