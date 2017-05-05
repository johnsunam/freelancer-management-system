<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employee_project`.
 */
class m170504_104912_create_employee_project_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('employee_project', [
            'id' => $this->primaryKey(),
            'employee_id' => $this->integer(),
            'project_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('employee_project');
    }
}
