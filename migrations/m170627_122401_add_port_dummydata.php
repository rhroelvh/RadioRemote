<?php

use yii\db\Migration;

class m170627_122401_add_port_dummydata extends Migration
{
    public function safeUp()
    {
        //add some data
        $this->insert("switchPort", ["switchPort_id" => 1, "switchPort_switchId" => 1, "switchPort_speed" => 100, "switchPort_description" => "Fa0/1"]);
        $this->insert("switchPort", ["switchPort_id" => 2, "switchPort_switchId" => 1, "switchPort_speed" => 100, "switchPort_description" => "Fa0/2"]);
        $this->insert("switchPort", ["switchPort_id" => 3, "switchPort_switchId" => 1, "switchPort_speed" => 1000, "switchPort_description" => "Gi0/1"]);
        $this->insert("switchPort", ["switchPort_id" => 4, "switchPort_switchId" => 1, "switchPort_speed" => 1000, "switchPort_description" => "Gi0/2"]);
        
        $this->insert("switchPort", ["switchPort_id" => 5, "switchPort_switchId" => 2, "switchPort_speed" => 100, "switchPort_description" => "HP_Fa0/1"]);
        $this->insert("switchPort", ["switchPort_id" => 6, "switchPort_switchId" => 2, "switchPort_speed" => 100, "switchPort_description" => "HP_Fa0/2"]);
        $this->insert("switchPort", ["switchPort_id" => 7, "switchPort_switchId" => 2, "switchPort_speed" => 1000, "switchPort_description" => "HP_Gi0/1"]);
        $this->insert("switchPort", ["switchPort_id" => 8, "switchPort_switchId" => 2, "switchPort_speed" => 1000, "switchPort_description" => "HP_Gi0/2"]);
       
        $this->insert("portData", ["portData_id" => 1, "portData_switchPortId" => 1, "portData_troughput" => 80, "portData_connected" => true, "portData_error" => false, "portData_timeStamp" => date('Y-m-d H:i:s')]);
        $this->insert("portData", ["portData_id" => 2, "portData_switchPortId" => 2, "portData_troughput" => 10, "portData_connected" => true, "portData_error" => false, "portData_timeStamp" => date('Y-m-d H:i:s')]);
        $this->insert("portData", ["portData_id" => 3, "portData_switchPortId" => 3, "portData_troughput" => 0, "portData_connected" => false, "portData_error" => false, "portData_timeStamp" => date('Y-m-d H:i:s')]);
        $this->insert("portData", ["portData_id" => 4, "portData_switchPortId" => 4, "portData_troughput" => 0, "portData_connected" => false, "portData_error" => true, "portData_timeStamp" => date('Y-m-d H:i:s')]);
        
        $this->insert("portData", ["portData_id" => 5, "portData_switchPortId" => 5, "portData_troughput" => 0, "portData_connected" => true, "portData_error" => false, "portData_timeStamp" => date('Y-m-d H:i:s')]);
        $this->insert("portData", ["portData_id" => 6, "portData_switchPortId" => 6, "portData_troughput" => 20, "portData_connected" => true, "portData_error" => false, "portData_timeStamp" => date('Y-m-d H:i:s')]);
        $this->insert("portData", ["portData_id" => 7, "portData_switchPortId" => 7, "portData_troughput" => 900, "portData_connected" => false, "portData_error" => true, "portData_timeStamp" => date('Y-m-d H:i:s')]);
        $this->insert("portData", ["portData_id" => 8, "portData_switchPortId" => 8, "portData_troughput" => 950, "portData_connected" => true, "portData_error" => false, "portData_timeStamp" => date('Y-m-d H:i:s')]);        
    }

    public function safeDown()
    {
        $this->truncateTable("portData");
        $this->truncateTable("switchPort");

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170627_122401_add_port_dummydata cannot be reverted.\n";

        return false;
    }
    */
}
