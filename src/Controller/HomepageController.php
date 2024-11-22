<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\ContactUs;
use App\Entity\User;
use App\Form\ContactUsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomepageController extends AbstractController
{
    /**
     * @throws \Exception
     */
    #[Route('/', name: 'app_homepage')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Get account details
        $userAccount = $entityManager->getRepository(User::class)->findAll();

        if (1 !== count($userAccount)) {
            throw new \Exception('Error, incorrect user account count returned.');
        }

        // Clean user account assignment
        $userAccount = $userAccount[0];

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
                'contactUsForm' => $contactUsForm->createView(),
                'userAccount' => $userAccount,
            ]
        );
    }
}
