<?php

namespace App\Controller;

use App\Entity\Coiffure;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CoiffureController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/coiffure", name="coiffure")
    */
    public function index(): Response
    {
        $coiffure = $this->entityManager->getRepository(Coiffure::class)->findAll();
        return $this->render('coiffure/index.html.twig', [
            'coiffure' => $coiffure
        ]);
    }
}
