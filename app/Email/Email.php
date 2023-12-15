<?php

namespace App\Email;

class Email
{
    private $email;

    public function __construct($email)
    {
        $this->isValidEmail($email);
        $this->email = $email;
    }

    public static function returnInstance(string $email): self
    {
        return new self($email);
    }

    public function __toString(): string
    {
        return $this->email;
    }

    private function isValidEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            throw new \InvalidArgumentException(
                sprintf(
                    '"%s" is invalid email', $email
                )
            );
        }
    }
}