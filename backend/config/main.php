<?php

return CMap::mergeArray(
    require(__DIR__ . '/../../common/config/main.php'),
    array(
        'basePath' => __DIR__ . '/../',
        'defaultController' => 'dashboard',
        'components' => array(
            'urlManager' => array(
                'rules' => require(__DIR__ . '/routes.php'),
            ),
            'errorHandler' => array(
                'errorAction' => 'default/error',
            ),
        ),
        'params' => require(__DIR__ . '/params.php'),
    )
);