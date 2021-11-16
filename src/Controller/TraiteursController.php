<?php

namespace App\Controller;

use App\Entity\Traiteurs;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TraiteursController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/traiteurs", name="traiteurs")
     */
    public function index(): Response
    {
        $traiteurs = $this->entityManager->getRepository(Traiteurs::class)->findAll();
        return $this->render('traiteurs/index.html.twig', [
            'traiteurs' => $traiteurs
        ]);
    }
}
