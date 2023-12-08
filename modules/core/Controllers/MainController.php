<?php

namespace Stage\Portfolio\Controllers;

use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class MainController extends BaseController
{
    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function index(): void
    {
        $mainBgOne = "bg-sky-800";
        $mainBgTwo = "bg-indigo-800";

        $this->render('home.twig', [
            'mainBgOne' => $mainBgOne,
            'mainBgtwo' => $mainBgTwo
        ]);
    }
}