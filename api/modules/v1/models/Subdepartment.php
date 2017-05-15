<?php

namespace api\modules\v1\models;

use Yii;

/**
 * This is the model class for table "sub_department".
 *
 * @property integer $id
 * @property string $name
 * @property integer $department_id
 *
 * @property Department $department
 */
class Subdepartment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sub_department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'department_id'], 'required'],
            [['department_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'department_id' => 'Department ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }
}
