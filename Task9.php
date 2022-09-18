<?php

namespace src;

use InvalidArgumentException;

class Task9
{
    public function main(array $inputArr, int $sum): array
    {
        if (count($inputArr) < 3) {
            throw new InvalidArgumentException('You must input array of numbers, and an integer value');
        }

        $res = [];

        for ($i = 0; $i < count($inputArr) - 2; $i++) {
            if (!is_int($inputArr[$i]) || !is_int($inputArr[$i + 1]) || !is_int($inputArr[$i + 2])) {
                throw new InvalidArgumentException('You must input array of numbers!!!');
            }
            if ($sum === $inputArr[$i] + $inputArr[$i + 1] + $inputArr[$i + 2]) {
                $res[] = "{$inputArr[$i]} + {$inputArr[$i + 1]} + {$inputArr[$i + 2]} = $sum";
            }
        }

        return $res;
    }
}
