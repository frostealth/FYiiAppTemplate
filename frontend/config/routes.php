<?php

return CMap::mergeArray(
    array(
        '' => 'default/index',
    ),
    require(__DIR__ . '/../../common/config/routes.php')
);
