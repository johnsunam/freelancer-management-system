<?php

namespace api\modules\v1\models;

use Yii;

/**
 * This is the model class for table "branch".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Department[] $departments
 * @property Department[] $departments0
 */
class Branch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'branch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(Department::className(), ['branch_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments0()
    {
        return $this->hasMany(Department::className(), ['branch_id' => 'id']);
    }
}
