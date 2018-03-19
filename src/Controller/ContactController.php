<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends Controller
{
    /**
     *
     * @param Request $request
     * @return type
     * @Route("/contact")
     */

    public function register(Request $request){
        $contact= new Contact();
        $form= $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted()){
            if ($form->isValid()){
            $em = $this->getdoctrine()->getManager();
            $em->persist ($contact);
            $em->flush();

             $this->addFlash('success', 'Votre compte a été envoyé ');

             return $this->redirectToRoute('layout.html.twig');

            }else{
                $this->addFlash('error', 'Le formulaire contient des erreurs');

            }
        };
                return $this->render('contact/index.html.twig',
                [
            'form' => $form->createView()
        ]);

    }
}
