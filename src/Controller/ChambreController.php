<?php

namespace App\Controller;

use App\Entity\Chambre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ChambreController extends Controller
{
    /**
     * @Route("/chambre")
     */
    public function preview()
    {
        $repository = $this->getDoctrine()->getRepository(Chambre::class);
        $chambres = $repository->findAll();
        
        return $this->render(
                'chambre/preview.html.twig',
                [
                    'chambres' => $chambres
                ]
        );
    }
 
     /**
     * @Route("/")
     */
    public function index(Chambre $chambre)
    {
        
        $repository = $this->getDoctrine()->getRepository(Chambre::class);
        $chambres = $repository->findAll();
         
       
        
        
        return $this->render('chambre/index.html.twig', 
                [
                    'chambres' => $chambres
                ]
        );
    }
}

