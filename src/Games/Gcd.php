<?php

namespace App\Games\BrainGcd;

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
    define("NUM_RAND_BEGIN", 1);
    define("NUM_RAND_END", 99);
    $numOne = rand(NUM_RAND_BEGIN, NUM_RAND_END);
    $numTwo = rand(NUM_RAND_BEGIN, NUM_RAND_END);
    $question = "{$numOne} {$numTwo}";
    $correctAnswer = gcd($numOne, $numTwo);
    return [$question, $correctAnswer];
}
