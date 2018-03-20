<?php

namespace App\Controller;

use App\Entity\Activites;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActivitesController extends Controller
{
    /**
     * @Route("/activites")
     */
    public function index()
    {
        return $this->render('activites/index.html.twig', [
            
        ]);
    }
}
