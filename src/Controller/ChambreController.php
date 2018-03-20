<?php
namespace App\Controller;

use App\Entity\Chambre;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ChambreController extends Controller
{
    /**
     * @Route("/chambre")
     */
    public function index()
    {
    	$repository = $this->getDoctrine()->getRepository(Chambre::class);
        $chambres = $repository->findAll();
        return $this->render('chambre/index.html.twig', [
            'chambres' => $chambres
        ]);
    }
    /**
    *@Route("/chambre/preview")
    */
    public function preview(){
        $repository = $this->getDoctrine()->getRepository(Chambre::class);
        $chambres = $repository->findAll();

        return $this->render('chambre/preview.html.twig', [
            'chambres' => $chambres]);}

}

