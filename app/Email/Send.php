<?php

namespace App\Email;

class Send
{
    private $emailSender;

    public function __construct(EmailSender $emailSender)
    {
        $this->emailSender = $emailSender;
    }

    public function send($data)
    {
        $this->emailSender->sendEmail('to@example.com', 'Test Subject', 'Test Message');
    }
}