<?php

use yii\db\Migration;

class m170508_100150_register_user extends Migration
{
    public function up()
    {
        $this->createTable('register_user',[
            'id'=>$this->primaryKey(),
            'username'=>$this->string()
        ]);

    }

    public function down()
    {
       $this->dropTable('register_user');
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
