<?php
namespace StringCalcKata;

class Calculator
{
    /**
     * @var InputProcessor
     */
    private $inputProcessor;

    public function __construct(InputProcessor $inputProcessor)
    {
        $this->inputProcessor = $inputProcessor;
    }

    public function calculate(string $inputString): Result
    {
        $ints = $this->inputProcessor->toInts($inputString);
        $sum = array_sum($ints);
        return new Result($sum);
    }
}
