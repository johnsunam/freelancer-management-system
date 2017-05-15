<?php

namespace api\modules\v1\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $email
 * @property string $address
 * @property integer $category_id
 * @property integer $attendance_id
 * @property integer $mobile_number
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'category_id', 'attendance_id', 'mobile_number'], 'integer'],
            [['name', 'email', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => 'Name',
            'email' => 'Email',
            'address' => 'Address',
            'category_id' => 'Category ID',
            'attendance_id' => 'Attendance ID',
            'mobile_number' => 'Mobile Number',
        ];
    }
}
