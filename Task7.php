<?php

namespace src;

use InvalidArgumentException;

class Task7
{
    public function main(array $inputArr, int $position): array
    {
        if (!count($inputArr) || $position > count($inputArr) - 1 || $position < 0) {
            throw new InvalidArgumentException('You must input array and position of the element of this array');
        }

        $res = [];

        foreach ($inputArr as $key => $value) {
            if ($key !== $position) {
                $res[] = $value;
            }
        }

        return $res;
    }
}
