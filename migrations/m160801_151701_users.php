<?php

use yii\db\Migration;

class m160801_151701_users extends Migration
{
    public function up()
    {
    $this->createTable('users',[
        'id'=>$this->primaryKey(),
        'login'=>$this->string()->notNull(),
        'password'=>$this->string()->notNull(),
    ]);
    }

    public function down()
    {
        echo "m160801_151701_users cannot be reverted.\n";

        return false;
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
