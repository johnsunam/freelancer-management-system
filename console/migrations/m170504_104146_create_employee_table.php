<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employee`.
 */
class m170504_104146_create_employee_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'name' => $this->string(),
            'email' => $this->string(),
            'address' => $this->string(),
            'category_id' => $this->integer(),
            'attendance_id' => $this->integer()->defaultValue(0),
            'mobile_number' => $this->bigInteger(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('employee');
    }
}
