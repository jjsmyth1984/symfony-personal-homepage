<?php

namespace App\Form;

use App\Entity\Skills;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SkillsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('percentage')
            ->add('foreignObjectX')
            ->add('foreignObjectY')
            ->add('foreignObjectWidth')
            ->add('foreignObjectHeight')
            ->add('user', EntityType::class, [
                'class' => User::class,
        'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Skills::class,
        ]);
    }
}
