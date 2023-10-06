<?php

return $route = [
    '~^hello/(.*)$~' =>[src\Controllers\MainControllers::class, 'sayHello'],
    '~^$~' => [src\Controllers\MainControllers::class,'main'],
];