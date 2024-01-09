<?php

namespace App\Games\Even;

use function App\Engine\runGame;

const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function runBrainEven()
{
    $tutorial = 'Answer "yes" if the number is even, otherwise answer "no".';
    $gameLogic = "App\Games\Even\brainEven";
    runGame($tutorial, $gameLogic);
}

function isEven(int $num)
{
    return $num % 2 === 0 ? true : false;
}

function brainEven()
{
    $question = rand(MIN_NUMBER, MAX_NUMBER);
    $correctAnswer = isEven($question) ? 'yes' : 'no';
    return [$question, $correctAnswer];
}
