<?php

namespace spec\StringCalcKata;

use StringCalcKata\Result;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ResultSpec extends ObjectBehavior
{
    function it_represents_a_number()
    {
        $this->beConstructedWith(3);
        $this->display()->shouldReturn('3');
    }

    function it_can_add_a_smiley_face_if_divisible_by_10()
    {
        $this->beConstructedWith(10);
        $this->display()->shouldReturn('10 :-)');
    }
}
