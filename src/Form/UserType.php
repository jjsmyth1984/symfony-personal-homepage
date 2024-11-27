<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname')
            ->add('surname')
            ->add('jobTitle')
            ->add('location')
            ->add('linkedin')
            ->add('github')
            ->add('website')
            ->add('email')
            ->add('aboutMe')
            ->add('philosophy')
            ->add('createdAt', null, [
                'widget' => 'single_text',
            ])
            ->add('lastUpdatedAt', null, [
                'widget' => 'single_text',
            ])
            ->add('roles')
            ->add('password')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}