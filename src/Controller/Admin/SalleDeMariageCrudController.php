<?php

namespace App\Controller\Admin;

use App\Entity\SalleDeMariage;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SalleDeMariageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SalleDeMariage::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('description'),
            TextField::new('emplacement'),
            AssociationField::new('categorie'),
            MoneyField::new('prix')->setCurrency('EUR'),
            IntegerField::new('capacite'),
            NumberField::new('lon'),
            NumberField::new('lat'),
            ImageField::new('image')
            ->setBasePath('imgsalles/')
            ->setUploadDir('public/imgsalles')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            

         
        ];
    }

}
