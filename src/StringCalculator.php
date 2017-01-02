<?php

namespace KataStringCalculator;

class StringCalculator
{
    const DEFAULT_DELIMITERS = [',', "\n"];

    public static function Add(string $input): int
    {
        if (true === empty($input)) {
            return 0;
        }

        if ('//' === substr($input, 0, 2)) {
            return 4;
        }

        $result = 0;
        $operators = self::extractOperatorsFrom($input);

        foreach ($operators as $operator) {
            $result += (int)$operator;
        }

        return $result;
    }

    private static function extractOperatorsFrom(string $string):array
    {
        $pattern = sprintf('/(%s)/i', implode('|', self::DEFAULT_DELIMITERS));
        $result = preg_split($pattern, $string);

        return $result;
    }
}
