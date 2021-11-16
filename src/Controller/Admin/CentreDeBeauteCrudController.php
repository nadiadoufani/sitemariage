<?php

namespace App\Controller\Admin;

use App\Entity\CentreDeBeaute;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CentreDeBeauteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CentreDeBeaute::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('description'),
            TextField::new('emplacement'),
            IntegerField::new('prix'),
            ImageField::new('image')
            ->setBasePath('imgcentre/')
            ->setUploadDir('public/imgcentre')
            ->setUploadedFileNamePattern('[randomhash].[extension]'),
         
        ];
    }
    
}
