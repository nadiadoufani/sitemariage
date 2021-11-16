<?php

namespace App\Controller;

use App\Entity\CentreDeBeaute;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CentreDeBeauteController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/centre/de/beaute", name="centre_de_beaute")
     */
    public function index(): Response
    {
        $centredebeaute = $this->entityManager->getRepository(CentreDeBeaute::class)->findAll();
        return $this->render('centre_de_beaute/index.html.twig', [
            'centredebeaute' => $centredebeaute,
        ]);
    }
}
