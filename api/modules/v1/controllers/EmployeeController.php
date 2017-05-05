<?php
/**
 * Created by PhpStorm.
 * User: osho
 * Date: 5/4/17
 * Time: 5:25 PM
 */

namespace api\modules\v1\controllers;

use Yii;
use yii\rest\ActiveController;

class EmployeeController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Employee';

    public function actionEmployee(){
        
         \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
         $employee=Yii::$app->getRequest()->getBodyParams();
      var_dump($employee);
         exit($employee['username']);
    }
}