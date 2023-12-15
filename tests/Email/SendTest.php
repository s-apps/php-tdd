<?php

use App\Email\EmailSender;
use App\Email\Send;
use PHPUnit\Framework\TestCase;

class SendTest extends TestCase
{
    public function testProcessMethodCallsSendEmail()
    {
        $emailSenderMock = $this->createMock(EmailSender::class);

        $emailSender = new Send($emailSenderMock);

        //Espera-se que o método sendEmail seja chamado uma única vez com argumentos específicos
        $emailSenderMock->expects($this->once())
                        ->method('sendEmail')
                        ->with(
                            $this->equalTo('to@example.com'),
                            $this->equalTo('Test Subject'),
                            $this->equalTo('Test Message')
                        );

        $emailSender->send(['data']);
    }
}
