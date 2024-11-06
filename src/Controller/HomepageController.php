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
        $contactUsForm = $this->createForm(ContactUsType::class, $contactUs);

        return $this->render('homepage/index.html.twig',
            [
                'controller_name' => 'HomepageController',
                "contactUsForm" => $contactUsForm->createView(),
            ]
        );
    }

}
