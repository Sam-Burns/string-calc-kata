<?php

namespace spec\StringCalcKata;

use StringCalcKata\InputProcessor;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InputProcessorSpec extends ObjectBehavior
{
    function it_can_split_the_string_to_an_array()
    {
        $this->toInts('1,2')->shouldBe([1,2]);
    }

    function it_can_convert_letters_to_numbers()
    {
        $this->toInts('A,B')->shouldBe([1,2]);
    }
}
