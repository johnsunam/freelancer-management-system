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
        $actions=parent::actions();
        unset($actions['create'],$actions['update'],$actions['delete'],$actions['view'],$actions['index']);
        return $actions;
    }

    public function actionCreateEmployee()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $employee = Yii::$app->getRequest()->getBodyParams();
        $email = $employee['email'];
        $foundEmail = User::find()->where(['email' => $email])->all();

        if ($foundEmail != null) {
            return 'Email already exists';
        } else{
            $user = new User();
            $user->username = $employee['name'];
            $user->email = $email;
            $user->setPassword('freelancer');
            $user->generateAuthKey();
            if ($user->save()) {
                $myEmp = new Employee();
                $myEmp->user_id = $user->id;
                $myEmp->name = $employee['name'];
                $myEmp->email = $email;
                $myEmp->mobile_number = $employee['mobile'];
                $myEmp->address = $employee['address'];
                $myEmp->category_id = $employee['category'];
                if ($myEmp->save()) {
                    return true;
                } else {
                    return 'employee couldn\'t be saved. Try again later';
                }
            } else {
                return 'user couldn\'t be saved. Try again later';
            }
        }

    }
}