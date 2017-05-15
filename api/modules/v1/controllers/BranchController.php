<?php
/**
 * Created by PhpStorm.
 * User: osho
 * Date: 5/4/17
 * Time: 5:25 PM
 */

namespace api\modules\v1\controllers;


use yii\rest\ActiveController;
use api\modules\v1\models\Branch;

class BranchController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Branch';

    public function actionCheckdublicate($name){
            
    }
}