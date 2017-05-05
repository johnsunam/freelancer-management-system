<?php

namespace api\modules\v1\models;

use Yii;

/**
 * This is the model class for table "employee_project".
 *
 * @property integer $id
 * @property integer $employee_id
 * @property integer $project_id
 */
class EmployeeProject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee_project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'project_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'employee_id' => 'Employee ID',
            'project_id' => 'Project ID',
        ];
    }
}
