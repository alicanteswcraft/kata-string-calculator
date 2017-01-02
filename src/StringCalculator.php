<?php

namespace KataStringCalculator;

class StringCalculator
{
    const SEPARATOR = ',';

    public static function Add(string $string): int
    {
        if (true === empty($string)) {
            return 0;
        }

        if (self::hasAtLeastOneSeparator($string)) {
            $operators = explode(self::SEPARATOR, $string);
            $operator1 = (int)$operators[0];
            $operator2 = (int)$operators[1];

            return $operator1 + $operator2;
        }

        return (int)$string;
    }

    private static function hasAtLeastOneSeparator(string $string):bool
    {
        return false !== strpos($string, self::SEPARATOR);
    }
}
