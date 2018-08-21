<?php

namespace StringCalcKata;

class InputProcessor
{
    public function toInts(string $inputString): array
    {
        $characters = explode(',', $inputString);

        return array_map([$this, 'toInt'], $characters);
    }

    private function toInt(string $character): int
    {
        $alphabet = str_split('abcdefghijklmnopqrstuvwxyz');

        $alphabet = array_flip($alphabet);

        if (key_exists(strtolower($character), $alphabet)) {
            return $alphabet[strtolower($character)] + 1;
        }

        return (int) $character;
    }
}
