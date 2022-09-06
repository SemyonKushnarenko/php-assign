<?php

namespace src;

use InvalidArgumentException;

class Task10
{
    public function main(int $input): array
    {
        if (!is_int($input)) {
            throw new InvalidArgumentException('You must input integer value');
        }

        $res = [$input];

        while ($input !== 1) {
            $input = $this->doCollatz($input);
            $res[] = $input;
        }

        return $res;
    }

    public function doCollatz(int $number): int
    {
        if ($number % 2 === 0) {
            return $number / 2;
        } else {
            return $number * 3 + 1;
        }
    }
}

$task = new Task10();

print_r($task->main(12));
