<?php
/**
 * Created by PhpStorm.
 * User: osho
 * Date: 5/4/17
 * Time: 5:25 PM
 */

namespace api\modules\v1\controllers;

use api\modules\v1\models\Employee;
use common\models\User;
use Yii;
use yii\rest\ActiveController;
use yii\web\Response;

class EmployeeController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Employee';


    public function actions()
    {
        $actions = parent::actions();
        unset($actions['create'], $actions['update'], $actions['delete'], $actions['view']);
        return $actions;
    }

    public function actionCreateEmployee()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $employee = Yii::$app->getRequest()->getBodyParams();
        $email = $employee['email'];
        $name = $employee['username'];
        $foundEmail = User::find()->where(['email' => $email])->all();

        if ($foundEmail == null) {

            $foundUsername = User::find()->where(['username' => $name])->all();

            if ($foundUsername != null) {
                return 'User name already exists';
            } elseif ($foundEmail != null) {
                return 'Email already exists';
            } else {
                $user = new User();
                $user->username = $name;
                $user->email = $email;
                $user->setPassword('freelancer');
                $user->generateAuthKey();
                if ($user->save()) {
                    $myEmp = new Employee();
                    $myEmp->user_id = $user->id;
                    $myEmp->username = $name;
                    $myEmp->email = $email;
                    $myEmp->reg_id = $employee['reg_id'];
                    $myEmp->first_name = $employee['first_name'];
                    $myEmp->middle_name = $employee['middle_name'];
                    $myEmp->last_name = $employee['last_name'];
                    $myEmp->joined_e_date = $employee['joined_e_date'];
                    $myEmp->joined_n_date = $employee['joined_n_date'];
                    $myEmp->dob_e = $employee['dob_e'];
                    $myEmp->dob_n = $employee['dob_n'];
                    $myEmp->citizenship_no = $employee['citizenship_no'];
                    $myEmp->gender = $employee['gender'];
                    $myEmp->p_country = $employee['p_country'];
                    $myEmp->t_country = $employee['t_country'];
                    $myEmp->p_zone = $employee['p_zone'];
                    $myEmp->t_zone = $employee['t_zone'];
                    $myEmp->p_district = $employee['p_district'];
                    $myEmp->t_district = $employee['t_district'];
                    $myEmp->p_address = $employee['p_address'];
                    $myEmp->t_address = $employee['t_address'];
                    $myEmp->p_street = $employee['p_street'];
                    $myEmp->t_street = $employee['t_street'];
                    $myEmp->branch_id = $employee['branch_id'];
                    $myEmp->mode_id = $employee['mode_id'];
                    $myEmp->department_id = $employee['department_id'];
                    $myEmp->sub_department_id = $employee['sub_department_id'];
                    $myEmp->designation_id = $employee['designation_id'];
                    $myEmp->grade_id = $employee['grade_id'];
                    $myEmp->status_id = $employee['status_id'];
                    $myEmp->type_id = $employee['type_id'];
                    $myEmp->mobile_number = $employee['mobile_number'];
                    if ($myEmp->save()) {
                        return true;
                    } else {
                        return $myEmp->errors;
                    }
                } else {
                    return 'user couldn\'t be saved. Try again later';
                }

            }
        }else{
            return 'duplicate email';
        }
    }
}
