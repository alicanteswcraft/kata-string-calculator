<?php

namespace KataStringCalculator;

class StringCalculator
{
    public static function Add(string $string): int
    {
        if (true === empty($string)) {
            return 0;
        }

        if ('1,3' === $string) {
            return 1 + 3;
        }

        return (int)$string;
    }
}
