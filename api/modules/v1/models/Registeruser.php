<?php

namespace api\modules\v1\models;

use Yii;

/**
 * This is the model class for table "register_user".
 *
 * @property integer $id
 * @property string $username
 *
 * @property Employee[] $employees
 * @property UserAttendence[] $userAttendences
 */
class Registeruser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'register_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['username'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(Employee::className(), ['reg_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserAttendences()
    {
        return $this->hasMany(UserAttendence::className(), ['user_id' => 'id']);
    }
}
