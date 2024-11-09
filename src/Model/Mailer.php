<?php

namespace App\Model;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mime\Email;

class Mailer extends AbstractController
{

    /**
     * @param MailerInterface $mailerInterface
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function sendEmail(MailerInterface $mailerInterface): Response
    {

        // Email builder
        $email = (new Email())
            ->from('noreply@jjsmyth.net')
            ->to('joe@jjsmyth.net')
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');


        // Send email
        $mailerInterface->send($email);

        // Return response
        return new Response('Email was sent successfully.');

    }

}