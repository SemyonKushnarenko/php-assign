<?php

namespace src;

use InvalidArgumentException;

class MyCalculator
{
    private $res = 0;
    private $a;
    private $b;

    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function __toString()
    {
        return $this->res;
    }
    public function add(int $summar = null)
    {
        if ($summar) {
            $this->res += $summar;
        } else {
            $this->res = $this->a + $this->b;
        }

        return $this;
    }

    public function multiply(int $prov = null)
    {
        if ($prov) {
            $this->res += $prov;
        } else {
            $this->res = $this->a + $this->b;
        }

        return $this;
    }

    public function divideBy(int $div)
    {
        if (!$div) {
            throw new InvalidArgumentException('You must input integer value into divideBy');
        }
        $this->res = $this->res / $div;

        return $this;
    }

    public function substract(int $summar = null)
    {
        if ($summar) {
            $this->res += $summar;
        } else {
            $this->res = $this->a - $this->b;
        }

        return $this;
    }
}
