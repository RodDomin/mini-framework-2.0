<?php

namespace Routes;

use CoffeeCode\Router\Router;

class Routes
{
    private Router $router;

    public function __construct()
    {
        $this->router = new Router(WEB_HOST);
        $this->router->namespace('App\\Controller');
    }

    public function bootWebRouter()
    {
        $webRouter = new Web(
            $this->router
        );

        $webRouter->register();
    }

    public function bootApiRouter()
    {
        $apiRouter = new Api(
            $this->router
        );

        $apiRouter->register();
    }

    public function bootSystem()
    {
        $this->router->dispatch();
    }
}