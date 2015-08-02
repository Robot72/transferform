<?php

use yii\db\Schema;
use yii\db\Migration;

class m150709_141511_loyalty_card extends Migration {

    public $tableName = '{{%loyalty_card}}';

    public function up() {
        $tableOptions = null;
        if (Yii::$app->db->driverName == "mysql") {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable($this->tableName, [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
        ]);

        $this->insert($this->tableName, [
            'name' => 'Belavia Leader',
        ]);
    }

    public function down() {
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
