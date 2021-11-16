<?php

namespace App\Controller;

use App\Entity\Traiteurs;
use App\Entity\SalleDeMariage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SalleDeMariageController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/salle/de/mariage", name="salle_de_mariage")
     */
    public function index(): Response
    {
        $salledemariage = $this->entityManager->getRepository(SalleDeMariage::class)->findAll();
        return $this->render('salle_de_mariage/index.html.twig', [
            'salledemariage' => $salledemariage
        ]);
    }
  
 
}
