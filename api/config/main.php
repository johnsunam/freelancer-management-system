<?php
// $params = array_merge(
//     require(__DIR__ . '/../../common/config/params.php'),
//     require(__DIR__ . '/../../common/config/params-local.php'),
//     require(__DIR__ . '/params.php'),
//     require(__DIR__ . '/params-local.php')
// );

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', ],
    'modules' => [
        'v1' => [
            'class' => 'api\modules\v1\Module',   // here is our v1 modules
            'basePath' => '@api/modules/v1',
        ],
        'gii' => [
            'class' => 'yii\gii\Module'
        ]
    ],
    'components' => [
        'request'=>[
            'parsers'=>[
                    'application/json' =>'yii\web\JsonParser',
            ],
            'cookieValidationKey' => 'kljhjgfxffghkj;ljhkhghjkjkjlkhjh'
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            //'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => ['v1/project', 'v1/employee','v1/login','v1/category','v1/branch','v1/department','v1/subdepartment','v1/designation','v1/grade','v1/mode','v1/status','v1/type','v1/registeruser','v1/userattendence'],  // our country api rule,
                    
                    'tokens' => [
                        '{id}' => '<id:\\w+>'
                    ]
                ],
            ],
        ]
    ],
    // 'params' => $params,
];