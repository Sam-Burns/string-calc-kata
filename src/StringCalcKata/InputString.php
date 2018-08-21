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
        $stringFragments = $this->splitByDelimiter($this->input);
        $arrayOfInts = array_map([$this, 'convertToInt'], $stringFragments);
        return $arrayOfInts;
    }

    private function splitByDelimiter($inputString): array
    {
        $delimiter = ',';

        if (strpos($inputString, '//') === 0) {
            $delimiter = $inputString[2];
            $inputString = substr($inputString, 3);
        };

        return explode($delimiter, $inputString);
    }

    private function convertToInt(string $inputStringFragment): int
    {
        return (int) $inputStringFragment;
    }
}
