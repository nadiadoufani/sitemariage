<?php

namespace App\Controller;

use App\Entity\Photographe;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PhotographeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/photographe", name="photographe")
     */
    public function index(): Response
    {
        $photographe = $this->entityManager->getRepository(Photographe::class)->findAll();
        return $this->render('photographe/index.html.twig', [
            'photographe' => $photographe,
        ]);
    }
}
