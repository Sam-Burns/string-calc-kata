<?php
namespace StringCalcKata;

class Calculator
{
    public function calculate(string $inputString): Result
    {
        $alphabet = str_split('abcdefghijklmnopqrstuvwxyz');

        $alphabet = array_flip($alphabet);

        $numbers = explode(',', $inputString);
        $sum = 0;
        foreach ($numbers as $key => $number)
        {
            if (key_exists(strtolower($number), $alphabet)) {
                $numbers[$key] = $alphabet[strtolower($number)] + 1;
            }
            $sum += (int)$numbers[$key];
        }

        return new Result($sum);
    }
}
