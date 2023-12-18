<?php

namespace App\Games\BrainGcd;

use function App\Engine\runGame;

const MIN_NUMBER = 1;
const MAX_NUMBER = 99;

function runGcd()
{
    $tutorial = 'Find the greatest common divisor of given numbers.';
    $gameLogic = "App\Games\BrainGcd\brainGcd";
    runGame($tutorial, $gameLogic);
}

function gcd(int $n, int $m)
{
    while (true) {
        if ($n === $m) {
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
    $numOne = rand(MIN_NUMBER, MAX_NUMBER);
    $numTwo = rand(MIN_NUMBER, MAX_NUMBER);
    $question = "{$numOne} {$numTwo}";
    $correctAnswer = (string)gcd($numOne, $numTwo);
    return [$question, $correctAnswer];
}
