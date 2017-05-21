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
use api\modules\v1\models\Branch;
use yii\web\Response;

class BranchController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Branch';

//    public function actions()
//    {
//        $actions = parent::actions();
//        unset($actions['view']);
//        return $actions;
//    }

    public function actionCheckDuplicity($name){
        Yii::$app->response->format = Response::FORMAT_JSON;

        $branch = Branch::find()->where(['name'=>$name])->all();

        if ($branch==null){
            return ['duplicity' => false];
        }else{
            return ['duplicity' => true];
        }

    }
}