<?php


class Validator
{

    public static function string($value, $min = 3, $max = INF)
    {

        return strlen(trim($value)) === 0;

        return strlen($value) >= $min && strlen($value) <= $max;
    }
}
