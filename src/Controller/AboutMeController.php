<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AboutMeController extends AbstractController
{
    /**
     * @Route("/aboutme", name="aboutme")
     */
    public function aboutMe()
    {
        return $this->render('aboutMe.html.twig', [
            'controller_name' => 'AboutMeController',
        ]);
    }
}