<?php

namespace StringCalcKata;

class Result
{
    private $resultAsInt;

    public function __construct($resultAsInt)
    {
        $this->resultAsInt = $resultAsInt;
    }

    public function display(): string
    {
        if ($this->resultAsInt % 10 === 0) {
            return $this->resultAsInt . ' :-)';
        }
        return (string) $this->resultAsInt;
    }
}
