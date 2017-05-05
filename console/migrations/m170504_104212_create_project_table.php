<?php

use yii\db\Migration;

/**
 * Handles the creation of table `project`.
 */
class m170504_104212_create_project_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('project', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'duration' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('project');
    }
}
