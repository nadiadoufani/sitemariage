<?php

namespace App\Controller;

use App\Entity\Costume;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CostumeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/costume", name="costume")
     */
    public function index(): Response
    {
        $costume = $this->entityManager->getRepository(Costume::class)->findAll();
        return $this->render('costume/index.html.twig', [
            'costume' => $costume
        ]);
    }
}
