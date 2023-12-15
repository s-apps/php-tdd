<?php

namespace App\Tests;

use App\Math\MathOperations;
use PHPUnit\Framework\TestCase;

class MathOperationsTest extends TestCase
{
   /**
    * @test
    */
    public function add()
    {
        $math = new MathOperations();
        $result = $math->add(3, 5);
        $this->assertEquals(8, $result);
    }

    /**
     * @test
     */
    public function subtract()
    {
        $math = new MathOperations();
        $result = $math->subtract(8, 3);
        $this->assertEquals(5, $result);
    }
}