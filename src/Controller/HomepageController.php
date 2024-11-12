<?php

namespace App\Controller;

use App\Entity\ContactUs;
use App\Form\ContactUsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {
        // Instantiate contact us form
        $contactUs = new ContactUs();

        // Create contact us form instance
        $contactUsForm = $this->createForm(
            ContactUsType::class,
            $contactUs,
            [
                'action' => $this->generateUrl('app_contact_us'),
                'method' => 'POST',
                'attr' => [
                    'id' => 'contact-us-form',
                ],
            ]
        );

        return $this->render(
            'homepage/index.html.twig',
            [
                'controller_name' => 'HomepageController',
                'contactUsForm' => $contactUsForm->createView(),
            ]
        );
    }
}
