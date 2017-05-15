<?php

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;

/**
 * Book Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class BookController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Country';
    
}