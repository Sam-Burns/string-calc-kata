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

    function it_returns_zero_for_empty_input()
    {
        $this->calculate('')->shouldReturn(0);
    }

    function it_can_add_two_plus_two()
    {
        $this->calculate('2,2')->shouldReturn(4);
    }
}
