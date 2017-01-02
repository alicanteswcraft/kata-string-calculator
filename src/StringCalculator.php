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
            $sum = 0;

            foreach ($operators as $operator) {
                $sum += (int)$operator;
            }

            return $sum;
        }

        return (int)$string;
    }

    private static function hasAtLeastOneSeparator(string $string):bool
    {
        return false !== strpos($string, self::SEPARATOR);
    }
}
