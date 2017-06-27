<?php

use yii\db\Migration;

class m170627_120539_add_dummy_data extends Migration {

    public function safeUp() {

        //add some data
        $this->insert("boat", ["boat_id" => 1, "boat_imo" => 123456789, "boat_name" => "De Marius"]);

        $this->insert('device', ["device_id" => 1, "device_idBoat" => 1, "device_manufacturer" => "Cisco", "device_model" => "Catalyst 2960"]);
        $this->insert('device', ["device_id" => 2, "device_idBoat" => 1, "device_manufacturer" => "HP", "device_model" => "SuperSwitch 3000x"]);

        $this->insert("switch", ["switch_deviceId" => 1, "switch_ip" => "192.168.0.1"]);
        $this->insert("switch", ["switch_deviceId" => 2, "switch_ip" => "192.168.0.2"]);
    }

    public function safeDown() {
        echo "m170627_120539_add_dummy_data cannot be reverted.\n";
        $this->truncateTable("boat");
        $this->truncateTable("device");
        $this->truncateTable("switch");

        return false;
    }

    /*
      // Use up()/down() to run migration code without a transaction.
      public function up()
      {

      }

      public function down()
      {
      echo "m170627_120539_add_dummy_data cannot be reverted.\n";

      return false;
      }
     */
}
