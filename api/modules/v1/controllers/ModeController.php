<?php
/**
 * Created by PhpStorm.
 * User: osho
 * Date: 5/4/17
 * Time: 5:25 PM
 */

namespace api\modules\v1\controllers;


use api\modules\v1\models\Mode;
use Yii;
use yii\rest\ActiveController;
use yii\web\Response;

class ModeController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Mode';

    public function actionCheckDuplicity($name){
        Yii::$app->response->format = Response::FORMAT_JSON;

        $result = Mode::find()->where(['name'=>$name])->all();

        if ($result==null){
            return ['duplicity' => false];
        }else{
            return ['duplicity' => true];
        }

    }
}