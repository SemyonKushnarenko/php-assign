<?php

namespace src;

use InvalidArgumentException;

class Task5
{
    public function main(int $len): string
    {
        if ($len < 1) {
            throw new InvalidArgumentException('You must input integer value');
        }

        $a = '0';
        $b = '1';
        $res = '1';

        if ($len === 1) {
            return $a;
        }



        while (strlen($res) < $len) {
            $res = $this->fib($a, $b);
            $a = $b;
            $b = $res;
        }

        return $res;
    }

    public function fib(string $a, string $b): string
    {
        $res = '';
        $plus = 0;
        $len_a = strlen($a);
        $len_b = strlen($b);

        for ($i = 0; $i < $len_a; $i++) {
            $sum = intval($a[$len_a - $i - 1]) + intval($b[$len_b - $i - 1]);

            if ($sum > 9) {
                $res = $res . ($sum - 10 + $plus);
                $plus = 1;
            } else {
                if ($sum + $plus > 9) {
                    $res = $res . '0';
                    $plus = 1;
                } else {
                    $res = $res . ($sum + $plus);
                    $plus = 0;
                }
            }
        }

        if ($plus === 1) {
            $res = $res . '1';
        }

        if ($len_b > $len_a) {
            $presum = intval($b[0]);
            if ($plus === 1) {
                $presum += 1;
                $res = substr_replace($res, $presum, -1, 1);
            } else {
                $res = $res . $presum;
            }
        }

        return strrev($res);
    }
}
