<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `boat`.
 */
class m170627_112438_create_boat_table extends Migration
{
    /**
     * create table boat
     */
    public function up()
    {
        $this->createTable('boat', [
            'boat_id' => $this->primaryKey(),
            'boat_imo' => Schema::TYPE_INTEGER,
            'boat_name' => Schema::TYPE_STRING
        ]);
        
        $this->insert("boat", ["boat_id" => 1,"boat_imo" => 123456789, "boat_name" => "De Marius" ]);
        
    }

    /**
     * drops table boat
     */
    public function down()
    {
        $this->truncateTable('boat');
        $this->dropTable('boat');
    }
}
