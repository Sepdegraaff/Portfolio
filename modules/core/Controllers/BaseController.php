<?php

namespace Stage\Portfolio\Controllers;

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

abstract class BaseController
{
    private Environment $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader(getcwd() . '/../resources/views/');
        $this->twig = new Environment($loader, []);
    }

    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function render(string $template, array $arguments = []): void
    {
        echo $this->twig->render($template, $arguments);
    }
}