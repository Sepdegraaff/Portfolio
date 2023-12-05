<?php

namespace Stage\Portfolio;

use Kyrill\PhpRoute\Router;
use Stage\Portfolio\Controllers\MainController;

class Bootstrap
{
    public function index(): void
    {
        $router = new Router();

        $router->addRoute('GET', '/', [MainController::class, 'index']);
        $router->resolveRoute();
    }
}