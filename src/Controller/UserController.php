<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use App\Form\UserType;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{


    /**
     *
     * @param Request $request
     * @return type
     * @Route("/")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder){
        $user= new User();
        $form= $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted()){
            if ($form->isValid()){
                $password = $passwordEncoder->encodePassword(
                        $user,
                        $user->getPassword()
                        );
            $user->setPassword($password);
            $em = $this->getdoctrine()->getManager();
            $em->persist ($user);
            $em->flush();

             $this->addFlash('success', 'Votre compte est créé ');

             return $this->redirectToRoute('layout.html.twig');

            }else{
                $this->addFlash('error', 'Le formulaire contient des erreurs');

            }
        };
                return $this->render('user/register.html.twig',
                [
            'form' => $form->createView()
        ]);

    }
    /**
     * @Route("/login")
     */
    public function login(AuthenticationUtils $authenticationUtils){
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getUsername();

        return $this->render('user/login.html.twig',
                [
                    'error'=>$error,
                'last username'=>$lastUsername
                ]);
    }
    /**
     * @Route("/logout")
     */
    public function logout()
    {
        return $this->render('layout.html.twig');
    }
}
