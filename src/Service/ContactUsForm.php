<?php

namespace App\Service;

class ContactUsForm
{
    /**
     * @param array<string> $postData
     */
    public function updateForm(object $contactUsForm, array $postData): object
    {
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

        return $contactUsForm;
    }
}
