<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\ReceptionContact;
use App\Entity\Partenaire;
use App\Controller\Admin\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Xanary Master')
            ->renderContentMaximized();
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Users','fas fa-bowl-rice', User::class);
        yield MenuItem::linkToCrud('Contacts','fas fa-bowl-rice', ReceptionContact::class);
        yield MenuItem::linkToCrud('Partenaires','fas fa-bowl-rice', Partenaire::class);
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
