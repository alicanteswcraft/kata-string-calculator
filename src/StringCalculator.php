<?php

namespace KataStringCalculator;

class StringCalculator
{
    public static function Add(string $string): int
    {
        if (false === empty($string)) {
            return (int)$string;
        }

        return 0;
    }
}
