<?php

use yii\db\Schema;
use yii\db\Migration;

class m150709_130001_place_destination extends Migration
{
    public $table = '{{%place_destination}}';
    public function up()
    {
        $tableOptions = null;
        if(Yii::$app->db->driverName == "mysql")
        {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable($this->table, [
            'id' => Schema::TYPE_PK,
            'id_direction' => Schema::TYPE_INTEGER,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'attribute' => Schema::TYPE_INTEGER,
        ]);
        
        //$this->addForeignKey('foregnKeyForDirection', $this->table, 'id_direction', '{{%direction}}', 'id');
        
        $this->insert($this->table, [
            'id_direction' => 1,
            'name' => 'Minsk International Airport',
            'attribute' => 1,
        ]);
        
        $this->insert($this->table, [
            'id_direction' => 1,
            'name' => 'Minsk City',
            'attribute' => 2,
        ]);
        
        $this->insert($this->table, [
            'id_direction' => 2,
            'name' => 'Amsterdam City',
            'attribute' => 2,
        ]);
        
        $this->insert($this->table, [
            'id_direction' => 2,
            'name' => 'Eindhoven',
            'attribute' => 2,
        ]);
        
        $this->insert($this->table, [
            'id_direction' => 2,
            'name' => 'Groningen',
            'attribute' => 2,
        ]);
        
        $this->insert($this->table, [
            'id_direction' => 2,
            'name' => 'Rotterdam',
            'attribute' => 2,
        ]);
        
        $this->insert($this->table, [
            'id_direction' => 2,
            'name' => 'Schiphol Airport',
            'attribute' => 1,
        ]);
        
        $this->insert($this->table, [
            'id_direction' => 2,
            'name' => 'The Hague',
            'attribute' => 2,
        ]);
        
        $this->insert($this->table, [
            'id_direction' => 2,
            'name' => 'Utrecht',
            'attribute' => 2,
        ]);        
    }

    public function down()
    {
        $this->dropTable($this->table);
        echo "Drop-table $this->table.\n";
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
