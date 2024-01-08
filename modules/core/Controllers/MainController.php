<?php

namespace Stage\Portfolio\Controllers;

use Stage\Portfolio\Functions\DataGetter;
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
        $mainBgOne = "bg-gray-800";
        $mainBgTwo = "bg-gray-600";

        $DataGetter = new DataGetter($this->getConnection());
        $projects = $DataGetter->getData("projects");

        $paragraphData = $DataGetter->getData("textparagraphdata", 1);

        $this->render('home.twig', [
            'mainBgOne' => $mainBgOne,
            'mainBgtwo' => $mainBgTwo,
            'projects' => $projects,
            'paragraphdata' => $paragraphData
        ]);
    }
}