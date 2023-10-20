<?php

return $route = [
    '~^hello/(.*)$~' =>[src\Controllers\MainControllers::class, 'sayHello'],
    //'~^$~' => [src\Controllers\MainControllers::class,'main'],
    '~^$~' => [src\Controllers\ArticleController::class,'index'],
    '~^article/(\d)$~' => [src\Controllers\ArticleController::class,'show'],
];