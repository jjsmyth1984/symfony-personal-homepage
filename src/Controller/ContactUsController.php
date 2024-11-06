<?php

namespace App\Controller;

use App\Service\ContactUsForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class ContactUsController extends AbstractController
{
    #[Route('/contact-us', name: 'app_contact_us', methods: ['POST'])]
    public function contactUs(Request $request, ContactUsForm $contactUsForm): JsonResponse
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

        // Return successful response
        return new JsonResponse(['success' => true]);

    }

}
