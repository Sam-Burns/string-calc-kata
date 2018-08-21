<?php
namespace StringCalcKata;

class Calculator
{
    public function calculate(string $inputString): Result
    {
        $numbers = explode(',', $inputString);
        $sum = array_sum($numbers);
        return new Result($sum);
    }
}
