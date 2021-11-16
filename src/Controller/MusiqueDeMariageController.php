<?php

namespace App\Controller;

use App\Entity\MusiqueDeMariage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MusiqueDeMariageController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/musique/de/mariage", name="musique_de_mariage")
     */
    public function index(): Response
    {
        $musiquedemariage = $this->entityManager->getRepository(MusiqueDeMariage::class)->findAll();
        return $this->render('musique_de_mariage/index.html.twig', [
            'musiquedemariage' => $musiquedemariage,
        ]);
    }
}
