<?php

namespace App\Controller;

use App\Entity\ContactUs;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class ContactUsController extends AbstractController
{
    #[Route('/contact-us', name: 'app_contact_us', methods: ['POST'])]
    public function contactUs(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {

        // Get the post data
        $postData = json_decode($request->getContent(), true);

        // If the post data is empty return failed response
        if(!$postData) {
            return new JsonResponse(['success' => false, 'message' => 'No post data submitted']);
        }

        // Honeypot should not be passed from the frontend and should also not have a value
        if(isset($postData['contact_us_honey_pot']) && !$postData['contact_us_honey_pot']) {
            return new JsonResponse(['success' => false, 'message' => 'Honeypot isset and has a value which is incorrect']);
        }

        // Instantiate contact us form
        $contactUsForm = new ContactUs();

        // Make contact us post-value assignments
        $contactUsForm->setFirstname($postData['contact_us_firstname']);
        $contactUsForm->setsurname($postData['contact_us_surname']);
        $contactUsForm->setEmail($postData['contact_us_email']);
        $contactUsForm->setSubject($postData['contact_us_subject']);
        $contactUsForm->setMessage($postData['contact_us_message']);

        // Save and flush
        $entityManager->persist($contactUsForm);
        $entityManager->flush();

        // Return successful response
        return new JsonResponse(['success' => true]);

    }

}
