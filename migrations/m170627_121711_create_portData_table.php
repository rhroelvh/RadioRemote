<?php

use yii\db\Migration;

/**
 * Handles the creation of table `portData`.
 */
class m170627_121711_create_portData_table extends Migration
{
    
    /*
     * Class vars
     */
    public static $portData_portId_FK1 = 'portData_portId_FK1';
    
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('portData', [
            'portData_id' => $this->primaryKey(),
            'portData_switchPortId' => $this->integer(),
            'portData_troughput' => $this->integer(),
            'portData_connected' => $this->boolean(),
            'portData_error' => $this->boolean(),
            'portData_timeStamp' => $this->dateTime()
        ]);

        //add foreignKey
        $this->addForeignKey(self::$portData_portId_FK1, 'portData', 'portData_switchPortId', 'switchPort', 'switchPort_id');                
    }   

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->truncateTable('portData');
        $this->dropTable('portData');
    }
}
