<?php

namespace src;

use InvalidArgumentException;

class Task8
{
    public $str = '';
    public function main(string $inputStr)
    {
        if (!is_string($inputStr)) {
            throw new InvalidArgumentException('You must input json string value');
        }

        $obj = json_decode($inputStr);

        if (!$obj) {
            throw new InvalidArgumentException('You must input json string value');
        }


        return $this->objToStr($obj);
    }

    public function objToStr($obj)
    {
        foreach ($obj as $key => $value) {
            if (is_string($value)) {
                $this->str = $this->str . "$key: $value<br>";
            } else {
                $this->str = $this->objToStr($value);
            }
        }

        return $this->str;
    }
}
