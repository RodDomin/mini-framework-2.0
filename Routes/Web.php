<?php

namespace Routes;

use App\Controller\HomeController;
use CoffeeCode\Router\Router;

class Web implements IRoutes
{
    private Router $router;

    function __construct(Router $router)
    {
        $this->router = $router;

    }
    
    function register(): void
    {
        $this->router->get('/', 'HomeController:show');
    }
}