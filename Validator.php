<?php


class Validator
{

    public static function string($value, $min, $max = 1000)
    {

        return strlen(trim($value)) === 0 ?? true;

        return (strlen($value) >= $min && strlen($value) <= $max) ?? true;
    }

    public static function email($email){

        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
