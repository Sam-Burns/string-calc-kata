<?php
namespace StringCalcKata;

class Calculator
{
    public function calculate(string $inputString)
    {
        $numbers = explode(',', $inputString);
        $sum = array_sum($numbers);

        return $sum > 0 && $sum % 10 === 0 ? "$sum :-)" : $sum;
    }
}
