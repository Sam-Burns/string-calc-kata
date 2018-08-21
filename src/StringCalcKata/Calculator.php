<?php
namespace StringCalcKata;

class Calculator
{
    public function calculate(InputString $inputString): int
    {
        return array_sum($inputString->getNumbers());
    }
}
