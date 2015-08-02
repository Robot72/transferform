<?php

use yii\db\Schema;
use yii\db\Migration;

class m150614_151342_directions extends Migration
{
    public $tableName = '{{%directions}}';
    public function up()
    {
        $tableOptions = null;
        if(Yii::$app->db->driverName == "mysql")
        {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable($this->tableName, [
            'id'        => Schema::TYPE_PK,
            'id_type_country' => Schema::TYPE_INTEGER,
            'id_type_car' => Schema::TYPE_INTEGER,
            'name'      => Schema::TYPE_STRING . ' NOT NULL',
            'country'   => Schema::TYPE_STRING . ' NOT NULL',
            'max_passengers' => Schema::TYPE_INTEGER,
        ], $tableOptions);
        
        //$this->addForeignKey('foregnKeyForTypeCar', $this->tableName, 'id', 'id_type_car','{{%type_car}}');
        echo "CREATE DIRECTIONS TABLE! Enjoy my friend!\n";
        
        $this->insert($this->tableName, [
            'name' => 'Minsk',
            'id_type_car' => 1,
            'max_passengers' => 5,
        ]);
        
        $this->insert($this->tableName, [
            'name' => 'Amsterdam',
            'id_type_car' => 1,
            'max_passengers' => 5,
        ]);
        
        $this->insert($this->tableName, [
            'name' => 'Milan',
            'id_type_car' => 1,
            'max_passengers' => 5,
        ]);
        
        $this->insert($this->tableName, [
            'name' => 'Rome',
            'id_type_car' => 1,
            'max_passengers' => 5,
        ]);
        
        $this->insert($this->tableName, [
            'name' => 'Warsaw',
            'id_type_car' => 1,
            'max_passengers' => 5,
        ]);
        
        echo "DATA insert in table.";
    }

    public function down()
    {
        $this->dropTable($this->tableName);
        echo "DELETE TABLE!\n";
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
