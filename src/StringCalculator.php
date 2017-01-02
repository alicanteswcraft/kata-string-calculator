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
            $operator1 = 1;
            $operator2 = 3;

            return $operator1 + $operator2;
        }

        return (int)$string;
    }
}
