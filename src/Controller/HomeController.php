<?php

namespace App\Controller;

use App\Entity\Traiteurs;
use App\Entity\Photographe;
use App\Entity\CentreDeBeaute;
use App\Entity\SalleDeMariage;
use App\Entity\MusiqueDeMariage;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/home/detail/musique/{id}", name="home_detail_musique")
    */
    public function detailmusique($id)
    {
        $musiquedemariage = $this->getDoctrine()
                      ->getRepository(MusiqueDeMariage::class)
                      ->findOneBy(['id'=>$id]);
                      return $this->render('home/detailmusique.html.twig', [
                        'musiquedemariage' => $musiquedemariage]);
}
    /**
     * @Route("/home/detail/centre/{id}", name="home_detail_centre")
    */
    public function detailcentre($id)
    {
        $centredebeaute = $this->getDoctrine()
                      ->getRepository(CentreDeBeaute::class)
                      ->findOneBy(['id'=>$id]);
                      return $this->render('home/detailcentre.html.twig', [
                        'centredebeaute' => $centredebeaute]);
}
    /**
     * @Route("/home/detail/{id}", name="home_detail")
    */
    public function detail($id)
    {
        $photographe = $this->getDoctrine()
                      ->getRepository(Photographe::class)
                      ->findOneBy(['id'=>$id]);
                      return $this->render('home/detail.html.twig', [
                        'photographe' => $photographe]);
}
    /**
     * @Route("/home/details/{id}", name="home_details")
    */
    public function details($id)
    {
        $traiteurs = $this->getDoctrine()
                      ->getRepository(Traiteurs::class)
                      ->findOneBy(['id'=>$id]);
                      return $this->render('home/details.html.twig', [
                        'traiteurs' => $traiteurs]);
}
    /**
     * @Route("/home/{id}", name="home_show")
    */
    public function show($id)
    {
        $salledemariage = $this->getDoctrine()
                      ->getRepository(SalleDeMariage::class)
                      ->findOneBy(['id'=>$id]);
                      return $this->render('home/show.html.twig', [
                        'salledemariage' => $salledemariage]);
}
 
}
