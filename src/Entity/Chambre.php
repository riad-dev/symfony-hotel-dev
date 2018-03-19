<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
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
     *@ORM\column()
     *@Assert\NotBlank()
     *@var string
     */
    private $image;

    /**
    *@ORM\Column()
    *@Assert\NotBlank()
    *@var integer
     */
    private $nb_pers;

    /**
    *@ORM\Column()
    *@Assert\NotBlank()
    *@var integer
     */
    private $prix;

    /**
    *@ORM\Column()
    *@Assert\NotBlank()
    *@var string
     */
    private $description;

    function getId_chambre() {
        return $this->id_chambre;
    }

    function getNom() {
        return $this->nom;
    }

    function getImage() {
        return $this->image;
    }

    function getNb_pers() {
        return $this->nb_pers;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setNb_pers($nb_pers) {
        $this->place = $nb_pers;
    }
    function getPrix() {
        return $this->prix;
    }

    function getDescription() {
        return $this->description;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setDescription($description) {
        $this->description = $description;
    }


}
