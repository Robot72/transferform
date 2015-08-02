<?php

use yii\db\Schema;
use yii\db\Migration;

class m150709_134451_type_car extends Migration
{
    public $table = '{{%type_car}}';
    public function up()
    {
        $tableOptions = null;
        if(Yii::$app->db->driverName == "mysql")
        {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable($this->table, [
            'id'    => Schema::TYPE_PK,
            'name'  => Schema::TYPE_STRING . ' NOT NULL',
            'max_passengers' => Schema::TYPE_INTEGER,
            'price' => Schema::TYPE_INTEGER,
            'price_is_for_one' => Schema::TYPE_INTEGER,
            'coefficient' => Schema::TYPE_INTEGER,            
        ]);
        
        $this->insert($this->table, [
            'name' => 'Audi A6',
            'max_passengers' => 5,
            'price' => 1,
            'price_is_for_one' => 1,
            'coefficient' => 1,            
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
