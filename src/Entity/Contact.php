<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ContactRepository;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactRepository")
 */
class Contact
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
    *@Assert\NotBlank()
    *@var integer
    */
    private $telephone;

    /**
    *@ORM\Column()
    *@Assert\NotBlank()
    *@var string
    */
    private $message;
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function getMessage() {
        return $this->message;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    function setMessage($message) {
        $this->message = $message;
    }


}
