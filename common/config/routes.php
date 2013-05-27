<?php

return array(
    // AuthController
    '<_action:(login|logout)>' => 'auth/<_action>',
    'signup' => 'signup/index',

    // Default
    '<controller:\w+>' => '<controller>/index',
    '<controller:\w+>/<id:\d+>' => '<controller>/view',
    '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
    '<controller:\w+>/<action:\w+>' => '<controller>/<action>',

);