<?php

namespace Routes;

use CoffeeCode\Router\Router;

class Api implements IRoutes
{
    function __construct(Router $router)
    {
        $this->router = $router;

    }
    
    function register(): void
    {
        $this->router->get('/api', function () {
            echo json_encode(["message" => "Welcome to Mini-Framework 2.0"]);
        });
    }
}