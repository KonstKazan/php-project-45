<?php

namespace Php\Project\BrainGcd;

function gcd(int $n, int $m)
{
    while (true) {
        if ($n == $m) {
            return $m;
        }
        if ($n > $m) {
            $n -= $m;
        } else {
            $m -= $n;
        }
    }
}

function brainGcd()
{
    $numOne = rand(1, 99);
    $numTwo = rand(1, 99);
    $question = "{$numOne} {$numTwo}";
    $correctAnswer = gcd($numOne, $numTwo);
    return [$question, $correctAnswer];
}
