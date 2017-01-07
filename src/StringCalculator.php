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

        $operators = self::extractOperatorsFrom($input);

        return self::sum($operators);
    }

    /**
     * @param string $string
     * @return array
     */
    private static function extractOperatorsFrom(string $string): array
    {
        $delimiters = self::extractDelimitersFrom($string);
        $pattern = sprintf('/(%s)/i', implode('|', $delimiters));
        $result = preg_split($pattern, $string);

        return $result;
    }

    /**
     * @param $operators
     * @return int
     */
    private static function sum($operators): int
    {
        $result = 0;

        foreach ($operators as $operator) {
            $result += (int)$operator;
        }

        return $result;
    }

    /**
     * @param string $string
     * @return array
     */
    private static function extractDelimitersFrom(string $string)
    {
        if ('//' !== substr($string, 0, 2)) {
            return self::DEFAULT_DELIMITERS;
        }

        $delimiter = substr($string, 2, 1);

        return [$delimiter];
    }
}
