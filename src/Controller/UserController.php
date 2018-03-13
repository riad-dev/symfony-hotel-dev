<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use App\Form\UserType;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
    
    /**
     * 
     * @param Request $request
     * @return type
     * @Route("/")
     */
    public function register(Request $request){
        $user= new User();
        $form= $this->createForm(UserType::class, $user);
                return $this->render('user/index.html.twig',
                [
            'form' => $form->createView()
        ]);
        
    }
}
