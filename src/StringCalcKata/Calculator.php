<?php
namespace StringCalcKata;

class Calculator
{
    public function calculate(string $inputString): int
    {
        $numbers = explode(',', $inputString);
        return array_sum($numbers);
    }
}
