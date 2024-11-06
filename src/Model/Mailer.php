<?php

namespace App\Model;

use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mime\Email;

class Mailer extends AbstractController
{

    /**
     * @param MailerInterface $mailerInterface
     * @return void
     * @throws TransportExceptionInterface
     */
    public function sendEmail(MailerInterface $mailerInterface): void
    {
        $email = (new Email())
            ->from('noreply@jjsmyth.net')
            ->to('joe@jjsmyth.net')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailerInterface->send($email);
    }

}