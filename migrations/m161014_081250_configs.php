<?php

use yii\db\Migration;

class m161014_081250_configs extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB COMMENT="配置表"';
        }
        $this->createTable('{{%config}}', [
            'id' => $this->primaryKey(),
            'show_text' => $this->string(100)->notNull(),
            'type' => $this->string(100)->notNull(),
            'describe' => $this->string(100)->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('config');
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
