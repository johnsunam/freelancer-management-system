<?php
namespace api\modules\v1\controllers;
use Yii;
use yii\rest\ActiveController;
use common\models\LoginForm;

class LoginController extends ActiveController{
   public $modelClass='common\models\User';

    public function behaviors()
    {

    }

     public function actions()
     {
         $actions=parent::actions();
         unset($actions['create'],$actions['update'],$actions['delete'],$actions['view'],$actions['index']);
         //$actions['index']['prepareDataProvider'] = [$this, 'signin'];
         return $actions;
     }
   

    public function actionSignin(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
       $model=new LoginForm();
       if($model->load(Yii::$app->getRequest()->getBodyParams(),'') && $model->login()){
           
           return ['access_token'=> Yii::$app->user->identity->getAuthKey()];
       }
       else{
           $model->validate();
           return $model;
       }
    }
    

    
}