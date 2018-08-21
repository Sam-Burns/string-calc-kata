<?php
namespace spec\StringCalcKata;

use StringCalcKata\Calculator;
use PhpSpec\ObjectBehavior;
use StringCalcKata\InputString;

class CalculatorSpec extends ObjectBehavior
{
    function it_returns_zero_for_empty_input(InputString $inputString)
    {
        $inputString->getNumbers()->willReturn([]);
        $this->calculate($inputString)->shouldReturn(0);
    }

    function it_can_add_two_plus_two(InputString $inputString)
    {
        $inputString->getNumbers()->willReturn([2,2]);
        $this->calculate($inputString)->shouldReturn(4);
    }

    function it_can_add_lots_of_numbers(InputString $inputString)
    {
        $inputString->getNumbers()->willReturn([1,1,1,1]);
        $this->calculate($inputString)->shouldReturn(4);
    }
}
