<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
    *@ORM\Column()
    *@Assert\NotBlank()
    *@var string
    */
    
    private $nom;
    
    /**
    *@ORM\Column(unique=true)
    *@Assert\NotBlank()
    *@Assert\Email(message="Cet email n'est pas valide")
    *@var string
    */
    private $email;

    /**
    *@ORM\Column()
    *@var string
    */
    private $password;
    /**
    *@ORM\Column(length=20)
    *@var string
    */
    private $role = 'ROLE_USER';
    function getNom() {
        return $this->nom;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function getId() {
        return $this->id;
    }

	public function eraseCredentials() {
	       //sin on veut effacer les droits d'un utilisateur
	   }
	public function getRoles() {
       return [$this->role];
   }

   	public function getSalt() {
     //sécurité supplémentaire, on utilise un algocryptage ne nécessitant pas cette fonction
   	}

   	public function getUsername(): string{
       return $this->nom;
   }
}
