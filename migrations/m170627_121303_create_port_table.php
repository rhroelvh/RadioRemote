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
        $this->createTable('port', [
            'port_id' => $this->primaryKey(),
            'port_switchID' => $this->integer(),
            'port_speed' => $this->integer(),
            'port_description' => $this->string(),
        ]);

        //add foreignKey
        $this->addForeignKey(self::$port_switchId_FK1, 'port', 'port_switchId', 'switch', 'switch_id');
    }

    /**
     * @inheritdoc
     */
    public function down() {
        $this->truncateTable('portData');
        $this->dropTable('port');
    }

}
