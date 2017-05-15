<?php

namespace api\modules\v1\models;

use Yii;

/**
 * This is the model class for table "user_attendence".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $date_time
 * @property string $date
 * @property string $time
 *
 * @property RegisterUser $user
 */
class Userattendence extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_attendence';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['date_time', 'date', 'time'], 'safe'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => RegisterUser::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'date_time' => 'Date Time',
            'date' => 'Date',
            'time' => 'Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(RegisterUser::className(), ['id' => 'user_id']);
    }
}
