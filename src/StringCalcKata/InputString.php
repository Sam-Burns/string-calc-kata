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
        $arrayOfInts = array_map([$this, 'convertToInt'], $stringFragments);
        return $arrayOfInts;
    }

    private function convertToInt(string $inputStringFragment): int
    {
        return (int) $inputStringFragment;
    }
}
