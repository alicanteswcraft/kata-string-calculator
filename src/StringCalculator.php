<?php

namespace KataStringCalculator;

class StringCalculator
{
    public static function Add(string $string): int
    {
        if (true === empty($string)) {
            return 0;
        }

        return (int)$string;
    }
}
