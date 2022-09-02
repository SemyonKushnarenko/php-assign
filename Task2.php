<?php

namespace src;

use DateTime;
use InvalidArgumentException;

class Task2
{
    public function main(string $dateStr)
    {
        $format = 'd.m.Y';
        $d = DateTime::createFromFormat($format, $dateStr);

        if (!($d && $d->format($format) === $dateStr)) {
            throw new InvalidArgumentException('Invalid Arguments');
        }

        $then = strtotime($dateStr);
        $now = time();

        $res = intval(($then - $now) / (3600 * 24));

        if ($res < 0) {
            throw new InvalidArgumentException('You should write a date in future');
        }

        return $res;
    }
}

$task2 = new Task2();

print_r($task2->main('02.09.2022'));
