<?php

namespace App\Service;

use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\ContactUs;

class ContactUsForm
{

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(public EntityManagerInterface $entityManager)
    {
    }

    /**
     * @param array $postData
     * @return void
     */
    public function saveForm(array $postData): void
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
        $dateTime = new DateTime();
        $dateTimeFormat = $dateTime->format('Y-m-d H:i:s');
        $contactUsForm->setCreatedAt($dateTimeFormat);

        // Save and flush
        $this->entityManager->persist($contactUsForm);
        $this->entityManager->flush();

    }

}