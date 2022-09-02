<?php

namespace src;

use InvalidArgumentException;

class Task4
{
    public function main(string $inputStr): string
    {
        if (!is_string($inputStr)) {
            throw new InvalidArgumentException('You must input string value');
        }
        $words = preg_split("/[\s\-\_]+/", $inputStr);
        foreach ($words as &$word) {
            $word = ucwords($word);
        }

        return implode($words);
    }
}
