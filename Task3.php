<?php

namespace src;

use InvalidArgumentException;

class Task3
{
    public function main(int $inputNumber): int
    {
        if (!is_int($inputNumber)) {
            throw new InvalidArgumentException('You must input integer value');
        }

        $output = $inputNumber;

        while ($output > 9) {
            $output = array_sum(str_split($output));
        }

        return $output;
    }
}
