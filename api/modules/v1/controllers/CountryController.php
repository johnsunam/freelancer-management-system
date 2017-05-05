<?php

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\QueryParamAuth;
use yii\filters\auth\CompositeAuth;
/**
 * Country Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class CountryController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Country';
   

public function behaviors()
{
    $behaviors = parent::behaviors();
    $behaviors['authenticator'] = [
        'class' => CompositeAuth::className(),
        'only'=>['logout'],
        'authMethods' => [
            QueryParamAuth::className(),
        ],
    ];
    return $behaviors;


}
}