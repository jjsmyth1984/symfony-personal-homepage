<?php

namespace App\Service;

use App\Entity\ContactUs;
use Doctrine\ORM\EntityManagerInterface;

class ContactUsForm
{
    public function __construct(public EntityManagerInterface $entityManager)
    {
    }

    public function saveForm($postData): void
    {
        // Instantiate contact us form
        $contactUsForm = new ContactUs();

        // Make contact us post-value assignments
        $contactUsForm->setFirstname($postData['contact_us_firstname']);
        $contactUsForm->setSurname($postData['contact_us_surname']);
        $contactUsForm->setEmail($postData['contact_us_email']);
        $contactUsForm->setSubject($postData['contact_us_subject']);
        $contactUsForm->setMessage($postData['contact_us_message']);

        // Getting now() date and time
        $dateTime = new \DateTime();
        $dateTimeFormat = $dateTime->format('Y-m-d H:i:s');
        $contactUsForm->setCreatedAt($dateTimeFormat);

        // Save and flush
        $this->entityManager->persist($contactUsForm);
        $this->entityManager->flush();
    }
}
