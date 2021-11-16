<?php

namespace App\Controller;

use DateTimeImmutable;
use App\Entity\Commentaire;
use App\Entity\SalleDeMariage;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CommentaireController extends AbstractController
{
    
    /**
     * @Route("/commentaire/add", name="commentaire_add")
     */
    public function add(Request $request)
    {
        $post_id = $request->request->get('post_id');

        $user = $this->getUser();

        $post = $this->getDoctrine()
                ->getRepository(SalleDeMariage::class)
                ->find($post_id);

        $comment = new Commentaire();
        $comment->setText($request->request->get('_comment'));
        $comment->setUser($user);
        
        $comment->setSalledemariage($post);
        $comment->setCreatedAt(new \DateTimeImmutable());

        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->persist($comment);
        $entityManager->flush();

        $post_id = $post->getId();

        return $this->redirectToRoute('home_show',[
            'id' =>  $post_id
        ]);
    }
   /**
     * @Route("/commentaire/add1", name="commentaire_add1")
     */
    public function add1(Request $request)
    {
        $post_id = $request->request->get('post_id');

        $user = $this->getUser();

        $post = $this->getDoctrine()
                ->getRepository(Traiteurs::class)
                ->find($post_id);

        $comment = new Commentaire();
        $comment->setText($request->request->get('_comment'));
        $comment->setUser($user);
        
        $comment->setSalledemariage($post);
        $comment->setCreatedAt(new \DateTimeImmutable());

        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->persist($comment);
        $entityManager->flush();

        $post_id = $post->getId();

        return $this->redirectToRoute('traiteurs_show',[
            'id' =>  $post_id
        ]);
    }     
 
}
