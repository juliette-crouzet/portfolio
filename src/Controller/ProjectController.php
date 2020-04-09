<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    /**
     * @Route("/projects", name="projects")
     */
    public function showProjects()
    {
        return $this->render('projects.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }
}