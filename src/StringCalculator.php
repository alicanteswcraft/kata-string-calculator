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

        $pattern = sprintf('/(%s)/i', implode('|', self::SEPARATOR));
        $operators = preg_split($pattern, $string);

        foreach ($operators as $operator) {
            $result += (int)$operator;
        }

        return $result;
    }
}
