<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActivitesController extends Controller
{
    /**
     * @Route("/activites", name="activites")
     */
    public function index()
    {
        return $this->render('activites/index.html.twig', [
            'controller_name' => 'ActivitesController',
        ]);
    }
}
