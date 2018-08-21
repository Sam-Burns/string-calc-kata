<?php
namespace spec\StringCalcKata;

use StringCalcKata\Calculator;
use PhpSpec\ObjectBehavior;

class CalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Calculator::class);
    }

    function it_returns_zero_for_an_empty_string()
    {
        $this->calculate('')->shouldReturn(0);
    }

    function it_can_add_two_numbers()
    {
        $this->calculate('1,1')->shouldReturn(2);
    }
}
