<?php

namespace Routes;

use App\Utils\GetAssetsPath;
use App\Utils\GetTmpPath;
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

        # Assets and tmp path
        $this->router->get('/assets/{type}/{path}', function ($data) {
            GetAssetsPath::run([
                "type" => $data["type"],
                "path" => $data["path"]
            ]);
        });
        $this->router->get('/tmp/{path}', function ($data) {
            GetTmpPath::run([
                "path" => $data['path']
            ]);
        });
    }
}
