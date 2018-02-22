<?php

use PHPUnit\Framework\TestCase;
use test\ArithmeticCalculator;

class ArithmeticCalculatorTest extends TestCase
{

    public function testAdd()
    {
        $calculator = new ArithmeticCalculator();

        $result = $calculator->add(3, 4);

        $this->assertEquals(7, $result, 'La somme de 3 et 4 doit faire 7');
    }
}