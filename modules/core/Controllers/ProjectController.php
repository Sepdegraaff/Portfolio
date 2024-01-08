<?php

namespace Stage\Portfolio\Controllers;

use Stage\Portfolio\Functions\DataGetter;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class ProjectController extends BaseController
{

    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function index(): void
    {
        $DataGetter = new DataGetter($this->getConnection());

        $projectId = (int)($_GET['projectId'] ?? 0);
        $projects = $DataGetter->getData("projects", $projectId);

        $this->render('popups/project.twig',[
            'projectData' => $projects
        ]);
    }
}