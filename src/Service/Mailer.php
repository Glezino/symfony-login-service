<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class Mailer
{
    private $mailer;
    
    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendEmail($user, $content)
    {

        $email = (new Email())
            ->from('justamailer0@gmail.com')
            ->to($user)
            ->subject($content)
            ->text($content)
            ->html('<p>'.$content.'</p>');

        $this->mailer->send($email);
    }
}