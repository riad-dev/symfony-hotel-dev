<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\CommentsRepository;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentsRepository")
 */
class Comments
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_comm;
    /**
     * @ORM\Column()
     *@Assert\NotBlank()
     * @var string
     */
    private $content;
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     * @var integer
     */
    private $note;
    function getId_comm() {
        return $this->id_comm;
    }


    function getContent() {
        return $this->content;
    }

    function getNote() {
        return $this->note;
    }

    function setContent($content) {
        $this->content = $content;
    }

    function setNote($note) {
        $this->note = $note;
    }


}
