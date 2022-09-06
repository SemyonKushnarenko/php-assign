<?php

namespace src;

use InvalidArgumentException;

class Task7
{
    public function main(array $inputArr, int $position): array
    {
        if (!is_array($inputArr) || !is_int($position)) {
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
