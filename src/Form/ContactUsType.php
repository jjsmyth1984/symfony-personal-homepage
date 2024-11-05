<?php

namespace App\Form;

use App\Entity\ContactUs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactUsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add("firstname", TextType::class,
                array(
                    "label" => " ",
                    "required" => true,
                    "attr" => [
                        "placeholder" => "Your firstname",
                        "class" => "form-control",
                        "id" => "",
                        "maxlength" => "55"
                    ]
                )
            )
            ->add("surname", TextType::class,
                array(
                    "label" => " ",
                    "required" => true,
                    "attr" => [
                        "placeholder" => "Your surname",
                        "class" => "form-control",
                        "id" => "",
                        "maxlength" => "55"
                    ]
                )
            )
            ->add("email", EmailType::class,
                array(
                    "label" => "Email",
                    "required" => false,
                    "attr" => [
                        "placeholder" => "Your email",
                        "class" => "form-control",
                        "id" => ""
                    ],
                )
            )
            ->add("subject", ChoiceType::class,
                array(
                    "label" => "",
                    "required" => true,
                    "choices" => [
                        "Please select a subject" => "",
                        "Support enquiry" => "Support enquiry",
                        "Billing enquiry" => "Billing enquiry",
                        "General enquiry" => "General enquiry"
                    ],
                    "expanded" => false,
                    "multiple" => false,
                    "placeholder" => false,
                    "attr" => [
                        "placeholder" => "Please select a subject",
                        "class" => "form-control",
                        "id" => ""
                    ],
                )
            )
            ->add('message', TextareaType::class, [
                    'label' => 'Description',
                    'attr' => [
                        'rows' => 30,
                        'cols' => 100,
                        'class' => 'form-control',
                        'placeholder' =>
                            'Say something about us'
                    ],
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(
            [
                'data_class' => ContactUs::class,
                // enable/disable CSRF protection for this form
                'csrf_protection' => true,
                // the name of the hidden HTML field that stores the token
                'csrf_field_name' => '_token',
                // an arbitrary string used to generate the value of the token
                // using a different string for each form improves its security
                'csrf_token_id' => 'contact_us_token'
            ]
        );
    }
}
