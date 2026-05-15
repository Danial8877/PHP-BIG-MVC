<?php

namespace app\routes;

use app\core\routes\Route;

class Web
{
    public function routes()
    {
        Route::Get("/", "ExampleController", "index", "ExampleMiddleware");
        return Route::$routes;
    }
}
