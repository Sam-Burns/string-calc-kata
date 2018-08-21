<?php
namespace StringCalcKata;

class Calculator
{
    public function calculate(string $inputString): int
    {
        return array_sum(explode(',', $inputString));
    }
}
