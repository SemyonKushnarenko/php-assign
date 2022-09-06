<?php

namespace src;

use DateTime;

class Task6
{
    public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        $startDate = new DateTime("$year-$month");
        $endDate = new DateTime("$lastYear-$lastMonth");
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
