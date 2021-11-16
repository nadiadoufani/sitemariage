<?php

namespace App\Controller\Admin;

use App\Entity\Costume;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CostumeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Costume::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('image')
            ->setBasePath('imgcostume/')
            ->setUploadDir('public/imgcostume')
            ->setUploadedFileNamePattern('[randomhash].[extension]'),
            TextField::new('titre'),
            TextField::new('description'),
        ];
    }

}
