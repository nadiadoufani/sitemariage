<?php

namespace App\Controller\Admin;

use App\Entity\VoyageDeNoce;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class VoyageDeNoceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return VoyageDeNoce::class;
    }

   
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('description'),
            TextField::new('emplacement'),
            ImageField::new('image')
            ->setBasePath('imgvoyages/')
            ->setUploadDir('public/imgvoyages')
            ->setUploadedFileNamePattern('[randomhash].[extension]'),
         
        ];
    }
    
}
