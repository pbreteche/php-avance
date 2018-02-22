<?php

use PHPUnit\Framework\TestCase;
use test\ArithmeticCalculator;

class ArithmeticCalculatorTest extends TestCase
{

    /**
     * @var ArithmeticCalculator
     */
    private $calculator;

    /**
     * @before
     */
    public function setUpCalculator()
    {
        $this->calculator = new ArithmeticCalculator();
    }

    /*
     * commentaire normal
     */
    /**
     * @param $a
     * @param $b
     * @param $expected
     *
     * @dataProvider provideAdd
     */
    public function testAdd($a, $b, $expected)
    {
        $result = $this->calculator->add($a, $b);

        $this->assertEquals($expected, $result, 'La somme de '. $a.' et '.$b.' doit faire '.$expected);
    }

    public function testProduct()
    {
        $result = $this->calculator->product(3, 4);

        $this->assertEquals(12, $result, 'Le produit de 3 et 4 doit faire 12');
    }

    public function provideAdd()
    {
        return [
            [3, 4, 7],
            [12, 30, 42],
            [12, 30, 42],
            [12, 30, 42],
            [12, 30, 42],
        ];
    }
}