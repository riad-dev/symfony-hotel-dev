<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChambreRepository")
 */
class Chambre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_chambre;

    /**
    *@ORM\Column()
    *@Assert\NotBlank()
    *@var string
     */
    private $nom;

    /**
     *
     *
     */
    private $image;

    /**
    *@ORM\Column()
    *@Assert\NotBlank()
    *@var integer
     */
    private $nb_pers;

    function getId_chambre() {
        return $this->id_chambre;
    }

    function getNom() {
        return $this->nom;
    }

    function getImage() {
        return $this->image;
    }

    function getPlace() {
        return $this->nb_pers;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setPlace($nb_pers) {
        $this->place = $nb_pers;
    }



}
