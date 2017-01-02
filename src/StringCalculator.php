<?php

namespace KataStringCalculator;

class StringCalculator
{
    const SEPARATOR = [',', "\n"];

    public static function Add(string $string): int
    {
        if (true === empty($string)) {
            return 0;
        }

        $result = 0;
        $operators = self::extractOperatorsFrom($string);

        foreach ($operators as $operator) {
            $result += (int)$operator;
        }

        return $result;
    }

    private static function extractOperatorsFrom(string $string):array
    {
        $pattern = sprintf('/(%s)/i', implode('|', self::SEPARATOR));
        $result = preg_split($pattern, $string);

        return $result;
    }
}
