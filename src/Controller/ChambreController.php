<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ChambreController extends Controller
{
    /**
     * @Route("/chambre", name="chambre")
     */
    public function index()
    {
        return $this->render('chambre/index.html.twig', [
            'controller_name' => 'ChambreController',
        ]);
    }
	/**
     * @Route("/{id}")
     */
    public function index(/*id*/Chambre $chambre)
    {
        /*
        $repository = $this->getDoctrine()->getRepository(Category::class);
        $category = $repository->find($id);
         *
         */
        $repository = $this->getDoctrine()->getRepository(Chambre::class);
        //$articles = $repository->findBy(['category'=> $category]);
        $articles = $repository->findall();

        return $this->render('chambre/index.html.twig',
                [
                    'nom' => $nom,
                    'nombre' => $nb_pers
                ]
        );
    }
}
