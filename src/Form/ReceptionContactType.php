<?php

namespace App\Form;

use App\Entity\ReceptionContact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReceptionContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sujet', TextType::class)
            ->add('poles', TextType::class)
            ->add('equipe', TextType::class)
            ->add('roles', TextType::class)
            ->add('reseaux', TextType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ReceptionContact::class,
        ]);
    }
}
