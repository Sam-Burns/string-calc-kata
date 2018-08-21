<?php
namespace spec\StringCalcKata;

use StringCalcKata\Calculator;
use PhpSpec\ObjectBehavior;
use StringCalcKata\Result;

class CalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Calculator::class);
    }

    function it_returns_zero_for_an_empty_string()
    {
        $this->calculate('')->shouldBeLike(new Result(0));
    }

    function it_can_add_two_numbers()
    {
        $this->calculate('1,1')->shouldBeLike(new Result(2));
    }
}
