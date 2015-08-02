<?php

use yii\db\Schema;
use yii\db\Migration;

class m150709_142138_dependency extends Migration
{
    public $tableName = '{{%dependency}}';
    public function up()
    {
        $tableOptions = null;
        if(Yii::$app->db->driverName == "mysql")
        {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable($this->tableName, [
            'id' => Schema::TYPE_PK,
            'from' => Schema::TYPE_INTEGER,
            'to' => Schema::TYPE_INTEGER,
            'price' => Schema::TYPE_INTEGER,
            'require_from' => Schema::TYPE_BOOLEAN, //Обязательно ли заполняется атрибут(аутлет, номер рейса или адрес)
            'require_to' => Schema::TYPE_BOOLEAN,
            'require_name' => Schema::TYPE_BOOLEAN,
            'require_phone' => Schema::TYPE_BOOLEAN,
            'require_email' => Schema::TYPE_BOOLEAN,
            'require_date' => Schema::TYPE_BOOLEAN,
            'require_time' => Schema::TYPE_BOOLEAN,
        ]);
        
        $this->insert($this->tableName, [
            'from' => 1,
            'to' => 2,            
            'price' => 1,         
            'require_from' => true,
            'require_to' =>   true,  
            'require_name' => true,  
            'require_phone' => true,  
            'require_email' => true,
            'require_date' => true,  
            'require_time' =>  true, 
        ]);
    }

    public function down()
    {
        $this->dropTable($this->tableName);
        echo "Drop-table $this->tableName.\n";

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
