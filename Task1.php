<?php

namespace src;

use InvalidArgumentException;

class Task1
{
    public function main(int $inputNumber): string
    {
        if (!is_int($inputNumber)) {
            throw new InvalidArgumentException('You must input integer value');
        }

        return ($inputNumber > 30) ? 'More than 30' : (($inputNumber > 20) ? 'More than 20' : (($inputNumber > 10) ? 'More than 10' : 'Equal or less than 10'));
    }
}
