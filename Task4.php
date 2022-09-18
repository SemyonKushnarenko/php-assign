<?php

namespace src;

class Task4
{
    public function main(string $inputStr): string
    {
        $words = preg_split("/[\s\-\_]+/", $inputStr);
        foreach ($words as &$word) {
            $word = ucwords($word);
        }

        return implode($words);
    }
}
