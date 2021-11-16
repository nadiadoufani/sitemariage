<?php

namespace App\Controller;

use App\Entity\VoyageDeNoce;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VoyageDeNoceController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/voyage/de/noce", name="voyage_de_noce")
     */
    public function index(): Response
    {
        $voyagedenoce= $this->entityManager->getRepository(VoyageDeNoce::class)->findAll();
        return $this->render('voyage_de_noce/index.html.twig', [
            'voyagedenoce' => $voyagedenoce,
        ]);
    }
}
