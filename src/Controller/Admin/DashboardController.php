<?php

namespace App\Controller\Admin;

use App\Entity\Costume;
use App\Entity\Coiffure;
use App\Entity\Categorie;
use App\Entity\Publicite;
use App\Entity\Traiteurs;
use App\Entity\Commentaire;
use App\Entity\Photographe;
use App\Entity\Reservation;
use App\Entity\VoyageDeNoce;
use App\Entity\CentreDeBeaute;
use App\Entity\SalleDeMariage;
use App\Entity\MusiqueDeMariage;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Sitemariage');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('salle de mariage', 'fas fa-list', SalleDeMariage::class);
        yield MenuItem::linkToCrud('centre de beaute', 'fas fa-list', CentreDeBeaute::class);
        yield MenuItem::linkToCrud('photographe', 'fas fa-list', Photographe::class);
        yield MenuItem::linkToCrud('musique de mariage', 'fas fa-list', MusiqueDeMariage::class);
        yield MenuItem::linkToCrud('reservation', 'fas fa-list', Reservation::class);
        yield MenuItem::linkToCrud('costume', 'fas fa-list', Costume::class);
        yield MenuItem::linkToCrud('publicite', 'fas fa-list', Publicite::class);
        yield MenuItem::linkToCrud('categorie', 'fas fa-list', Categorie::class);
        yield MenuItem::linkToCrud('traiteurs', 'fas fa-list', Traiteurs::class);
        yield MenuItem::linkToCrud('coiffure', 'fas fa-list', Coiffure::class);
        yield MenuItem::linkToCrud('voyage de noce', 'fas fa-list', VoyageDeNoce::class);
    }

}
