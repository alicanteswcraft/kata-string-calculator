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

        $result = 0;
        $operators = explode(self::SEPARATOR, $string);

        foreach ($operators as $operator) {
            $result += (int)$operator;
        }

        return $result;
    }
}
