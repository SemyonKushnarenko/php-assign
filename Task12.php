<?php

namespace src;

use InvalidArgumentException;

class MyCalculator
{
    private $res = 0;
    private int $a;
    private int $b;

    public function __construct($a, $b)
    {
        if (!is_int($a) || !is_int($b)) {
            throw new InvalidArgumentException('You must input two integer values into instantiation of class');
        }
        $this->a = $a;
        $this->b = $b;
    }
    public function __toString()
    {
        return $this->res;
    }
    public function add()
    {
        $this->res = $this->a + $this->b;

        return $this;
    }

    public function multiply()
    {
        $this->res = $this->a * $this->b;

        return $this;
    }

    public function divideBy(int $div)
    {
        if (!is_int($div)) {
            throw new InvalidArgumentException('You must input integer value into divideBy');
        }
        $this->res = $this->res / $div;

        return $this;
    }

    public function substract()
    {
        $this->res = $this->a - $this->b;

        return $this;
    }
}
