<?php

use yii\db\Migration;

class m170508_100259_user_attendence extends Migration
{
    public function up()
    {
        $this->createTable('user_attendence',[
            'id'=>$this->primaryKey(),
            'userId'=>$this->integer(),
            'dataTime'=>$this->string(),
            'date'=>$this->string(),
            'time'=>$this->string()
        ]);
    }

    public function down()
    {
       $this->drop('user_attendence');
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
