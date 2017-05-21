<?php
/**
 * Created by PhpStorm.
 * User: osho
 * Date: 5/4/17
 * Time: 5:25 PM
 */

namespace api\modules\v1\controllers;


use api\modules\v1\models\Employee;
use Yii;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;

class RegisteruserController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Registeruser';

    public function actions()
    {
        $actions=parent::actions();
        unset($actions['create'],$actions['update'],$actions['delete'],$actions['view']);
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider()
    {
        $registeredIds = Employee::find()->all();
        $modelClass = $this->modelClass;
        return Yii::createObject([
            'class' => ActiveDataProvider::className(),
            'query' => $modelClass::find()->where(['not in','id',$registeredIds]),
        ]);
    }
   
}