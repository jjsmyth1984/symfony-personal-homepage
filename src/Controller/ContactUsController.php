<?php

namespace App\Controller;

use App\Model\Mailer;
use App\Service\ContactUsForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Attribute\Route;

class ContactUsController extends AbstractController
{
    /**
     * @throws TransportExceptionInterface
     */
    #[Route('/contact-us', name: 'app_contact_us', methods: ['POST'])]
    public function contactUs(Request $request, ContactUsForm $contactUsForm, MailerInterface $mailerInterface, Mailer $mailer): JsonResponse
    {

        // Get the posted data
        $postData = json_decode($request->getContent(), true);

        // If the posted data is empty, return failed response
        if(!$postData) {
            return new JsonResponse(['success' => false, 'message' => 'No post data submitted']);
        }

        // Honeypot should not be passed from the frontend and should also not have a value
        if(isset($postData['contact_us_honey_pot']) && !$postData['contact_us_honey_pot']) {
            return new JsonResponse(['success' => false, 'message' => 'Honeypot isset and has a value which is incorrect']);
        }

        // Process and save form data
        $contactUsForm->saveForm($postData);

        // Send email to owner
        $mailer->sendEmail($mailerInterface);

        // Return successful response
        return new JsonResponse(['success' => true]);

    }

}
