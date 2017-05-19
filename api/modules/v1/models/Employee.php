<?php

namespace api\modules\v1\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $reg_id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $email
 * @property integer $branch_id
 * @property integer $department_id
 * @property integer $sub_department_id
 * @property integer $designation_id
 * @property integer $grade_id
 * @property integer $status_id
 * @property integer $type_id
 * @property string $joined_e_date
 * @property string $joined_n_date
 * @property string $dob_e
 * @property string $dob_n
 * @property string $citizenship_no
 * @property string $gender
 * @property string $p_country
 * @property string $p_zone
 * @property string $p_district
 * @property string $p_address
 * @property string $p_street
 * @property string $t_country
 * @property string $t_zone
 * @property string $t_district
 * @property string $t_address
 * @property string $t_street
 * @property integer $attendance_id
 * @property integer $mobile_number
 *
 * @property User $user
 * @property RegisterUser $reg
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
            [['user_id', 'reg_id', 'branch_id', 'department_id', 'sub_department_id', 'designation_id', 'grade_id', 'status_id', 'type_id', 'mode_id'], 'integer'],
            [['branch_id'], 'required'],
            [['joined_e_date', 'joined_n_date', 'dob_e', 'dob_n'], 'safe'],
            [['first_name', 'middle_name', 'last_name', 'email', 'citizenship_no', 'gender', 'p_country', 'p_zone', 'p_district', 'p_address', 'mobile_number', 'p_street', 't_country', 't_zone', 't_district', 't_address', 't_street', 'username'], 'string', 'max' => 255],
            //[['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            //[['reg_id'], 'exist', 'skipOnError' => true, 'targetClass' => RegisterUser::className(), 'targetAttribute' => ['reg_id' => 'id']],
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
            'reg_id' => 'Reg ID',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'branch_id' => 'Branch ID',
            'department_id' => 'Department ID',
            'sub_department_id' => 'Sub Department ID',
            'designation_id' => 'Designation ID',
            'grade_id' => 'Grade ID',
            'status_id' => 'Status ID',
            'type_id' => 'Type ID',
            'joined_e_date' => 'Joined E Date',
            'joined_n_date' => 'Joined N Date',
            'dob_e' => 'Dob E',
            'dob_n' => 'Dob N',
            'citizenship_no' => 'Citizenship No',
            'gender' => 'Gender',
            'p_country' => 'P Country',
            'p_zone' => 'P Zone',
            'p_district' => 'P District',
            'p_address' => 'P Address',
            'p_street' => 'P Street',
            't_country' => 'T Country',
            't_zone' => 'T Zone',
            't_district' => 'T District',
            't_address' => 'T Address',
            't_street' => 'T Street',
            'mobile_number' => 'Mobile Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    **
     * @return \yii\db\ActiveQuery
     *
    public function getReg()
    {
        return $this->hasOne(RegisterUser::className(), ['id' => 'reg_id']);
    }
    */
}
