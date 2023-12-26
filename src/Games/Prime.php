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

function primeCheck(int $number)
{
    if ($number === 1) {
        return 'yes';
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return 'no';
        }
    }
    return 'yes';
}

function brainPrime()
{
    $num = rand(MIN_NUMBER, MAX_NUMBER);
    $question = $num;
    $correctAnswer = primeCheck($num);
    return [$question, $correctAnswer];
}
