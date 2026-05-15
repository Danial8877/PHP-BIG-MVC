<?php

namespace app\routes;
use app\core\routes\Route;

class Web
{
    public function routes()
    {
        Route::Get("/", "WelcomeController", "index", "WelcomeMiddleware");
        return Route::$routes;
    }
}
