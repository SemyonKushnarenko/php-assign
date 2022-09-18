<?php

namespace src;

use DateTime;
use InvalidArgumentException;

class Task6
{
    public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        if ($lastYear < 1 && $year < 1) {
            throw new InvalidArgumentException('You must input year and year of the end');
        }
        $startDate = new DateTime("$year-$month");
        $endDate = new DateTime("$lastYear-$lastMonth");
        if ($startDate > $endDate) {
            throw new InvalidArgumentException('You must input year and year of the end');
        }
        $i = 0;
        while ($startDate < $endDate) {
            $startDate = $startDate->modify('+1 month');
            if (date('l', date_timestamp_get($startDate)) === $day) {
                $i++;
            }
        }

        return $i;
    }
}

$task = new Task6();

print_r($task->main(2008, 2022, 2, 3, 'Monday'));
