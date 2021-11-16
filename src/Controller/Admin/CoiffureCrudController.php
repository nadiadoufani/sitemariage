<?php

namespace App\Controller\Admin;

use App\Entity\Coiffure;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CoiffureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Coiffure::class;
    }

  
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('description'),
            TextField::new('emplacement'),
            IntegerField::new('prix'),
            ImageField::new('image')
            ->setBasePath('imgcoiffure/')
            ->setUploadDir('public/imgcoiffure')
            ->setUploadedFileNamePattern('[randomhash].[extension]'),
        ];
    }
    
}
