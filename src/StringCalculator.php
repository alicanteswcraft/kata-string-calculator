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
            $numbers = substr($input, 3);
            $operators = self::extractOperatorsWithCustomDelimiterFrom($numbers);

            $result = 0;

            foreach ($operators as $operator) {
                $result += (int)$operator;
            }

            return $result;
        }

        $result = 0;
        $operators = self::extractOperatorsFrom($input);

        foreach ($operators as $operator) {
            $result += (int)$operator;
        }

        return $result;
    }

    private static function extractOperatorsWithCustomDelimiterFrom(string $string):array
    {
        $pattern = sprintf('/(%s)/i', implode('|', [';']));
        $result = preg_split($pattern, $string);

        return $result;
    }

    private static function extractOperatorsFrom(string $string):array
    {
        $pattern = sprintf('/(%s)/i', implode('|', self::DEFAULT_DELIMITERS));
        $result = preg_split($pattern, $string);

        return $result;
    }
}
