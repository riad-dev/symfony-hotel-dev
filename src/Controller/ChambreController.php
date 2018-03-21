<?php
namespace App\Controller;

use App\Entity\Chambre;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
* @Route("/chambre")
*/
class ChambreController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {
    	$repository = $this->getDoctrine()->getRepository(Chambre::class);
        $chambres = $repository->findAll();
        return $this->render('chambre/index.html.twig', [
            'chambres' => $chambres,
            
        ]);
    }
    /**
    *@Route("/{id}")
    */
    public function preview($id){
        
        $em = $this->getDoctrine()->getManager();
        $chambre = $em->find(Chambre::class, $id);
        
        return $this->render('chambre/preview.html.twig', 
                [
                   'chambre' => $chambre
                ]);
        
    }

}

