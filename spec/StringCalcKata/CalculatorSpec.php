<?php
namespace spec\StringCalcKata;

use StringCalcKata\Calculator;
use PhpSpec\ObjectBehavior;
use StringCalcKata\InputProcessor;
use StringCalcKata\Result;

class CalculatorSpec extends ObjectBehavior
{
    function let(InputProcessor $inputProcessor)
    {
        $this->beConstructedWith($inputProcessor);
    }

    function it_returns_zero_for_an_empty_string(InputProcessor $inputProcessor)
    {
        $inputProcessor->toInts('')->shouldBeCalled()->willReturn([]);
        $this->calculate('')->shouldBeLike(new Result(0));
    }

    function it_can_add_two_numbers(InputProcessor $inputProcessor)
    {
        $inputProcessor->toInts('1,1')->shouldBeCalled()->willReturn([1,1]);
        $this->calculate('1,1')->shouldBeLike(new Result(2));
    }
}
