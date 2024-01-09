<?php

namespace App\Games\Prime;

use function App\Engine\runGame;

const MIN_NUMBER = 1;
const MAX_NUMBER = 3001;

function runPrimeCheck()
{
    $tutorial = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $gameLogic = "App\Games\Prime\brainPrime";
    runGame($tutorial, $gameLogic);
}

function isPrime(int $number)
{
    if ($number === 1) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function brainPrime()
{
    $num = rand(MIN_NUMBER, MAX_NUMBER);
    $question = $num;
    $correctAnswer = isPrime($num) ? 'yes' : 'no';
    return [$question, $correctAnswer];
}
