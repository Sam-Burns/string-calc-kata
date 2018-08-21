<?php

namespace StringCalcKata;

class InputString
{
    /** @var string */
    private $input;

    public function __construct(string $input)
    {
        $this->input = $input;
    }

    public function getNumbers(): array
    {
        if ($this->input === '') {
            return [];
        }
        $stringFragments = explode(',', $this->input);
        $numbers = [];

        foreach ($stringFragments as $stringFragment) {
            $numbers[] = (int) $stringFragment;
        }
        return $numbers;
    }
}
