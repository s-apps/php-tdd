<?php

namespace App\Tests;

use App\Email\Email;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;


class EmailTest extends TestCase
{
    public function testIsInstanceOfEmail(): void
    {
        $email = Email::returnInstance('email@email.com.br'); //Arrange - Preparação

        $this->assertInstanceOf(Email::class, $email); //Assert - Afirmação
    }

    public function testCannotBeCreatedFromInvalidEmail(): void
    {
        $this->expectException(InvalidArgumentException::class); //Assert
        Email::returnInstance(''); //Arrange
        /**
         * O método expectException() deve ser usado antes que a exceção que você espera lançar seja lançada. 
         * Idealmente, expectException() é chamado imediatamente antes do código que deve lançar a exceção.
         */
    }
}