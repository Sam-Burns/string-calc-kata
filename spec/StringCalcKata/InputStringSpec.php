<?php

namespace spec\StringCalcKata;

use PhpSpec\ObjectBehavior;

class InputStringSpec extends ObjectBehavior
{
    function it_can_handle_empty_strings()
    {
        $this->beConstructedWith('');
        $this->getNumbers()->shouldBe([]);
    }

    function it_returns_integers()
    {
        $this->beConstructedWith('1');
        $this->getNumbers()->shouldBe([1]);
    }

    function it_can_split_by_commas()
    {
        $this->beConstructedWith('1,1');
        $this->getNumbers()->shouldBe([1,1]);
    }

    function it_can_accept_other_delimiters()
    {
        $this->beConstructedWith('//%1%1');
        $this->getNumbers()->shouldBe([1,1]);
    }
}
