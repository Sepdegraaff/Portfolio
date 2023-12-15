<?php

namespace Stage\Portfolio\Controllers;

use Stage\Portfolio\Functions\DataGetter;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class ProjectController extends BaseController
{

    private int $projectId;
    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function index(): void
    {
        $this->projectId = (int)($_GET['projectId'] ?? 0);
        $projects = $this->getData();

        $this->render('popups/project.twig',[
            'projectData' => $projects
        ]);
    }

    public function getData(): false|array
    {
        return (new DataGetter())->getData($this->getConnection(), "projects", $this->projectId);
    }
}