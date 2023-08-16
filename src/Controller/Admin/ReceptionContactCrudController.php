<?php

namespace App\Controller\Admin;

use App\Entity\ReceptionContact;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;

class ReceptionContactCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ReceptionContact::class;
    }

    public function configureCrud(Crud $crud): Crud 
    {
        return $crud 
            ->setEntityLabelInPlural('Users')
            ->setEntityLabelInSingular('User')

            ->setPageTitle("index" , "Xanary - Admistration des Contacts")

            ->setPaginatorPageSize(50);
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->hideOnForm(),
            TextEditorField::new('sujet')
                ->setFormTypeOption('disabled', 'disabled'),
            TextField::new('poles')
                ->setFormTypeOption('disabled', 'disabled'),
            TextField::new('equipe')
                ->setFormTypeOption('disabled', 'disabled'),
            TextField::new('roles')
                ->setFormTypeOption('disabled', 'disabled'),
            TextEditorField::new('reseaux'),
        ];
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
