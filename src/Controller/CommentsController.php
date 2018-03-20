<?php

namespace App\Controller;

use App\Entity\Comments;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommentsController extends Controller
{
    /**
     * @Route("/comments")
     */
    public function menu($comments)
    {
        $repository = $this->getDoctrine()->getRepository(Comments::class);
        $comments = $repository->findLatest(3, $comments);

        return $this->render(
                'comments/menu.html.twig',
                [
                    'comments' => $comments
                ]
        );
    }
    public function addComment(){
        return $this->render('comments/index.html.twig', [
            'content' => $content,
            'note' => $note]);
    }
}
