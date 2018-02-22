<?php

namespace spec\test;

use test\SpecCalculator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SpecCalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SpecCalculator::class);
    }

    function it_sums_two_numbers()
    {
        $this->add(3, 4)->shouldReturn(7);
    }
}
