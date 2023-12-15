<?php

namespace Stage\Portfolio;

use Kyrill\PhpRoute\Router;
use Stage\Portfolio\Controllers\MainController;
use Stage\Portfolio\Controllers\ProjectController;

class Bootstrap
{
    public function index(): void
    {
        $router = new Router();

        $router->addRoute('GET', '/', [MainController::class, 'index']);

        $router->addRoute('GET', '/popups/project' , [ProjectController::class, 'index']);
        $router->resolveRoute();
    }
}