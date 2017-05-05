<?php
/**
 * Created by PhpStorm.
 * User: osho
 * Date: 5/4/17
 * Time: 5:25 PM
 */

namespace api\modules\v1\controllers;


use yii\rest\ActiveController;

class ProjectController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Project';
}