<?php

namespace App\Games\BrainEven;

use function App\Engine\runGame;

const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function runBrainEven()
{
    $tutorial = 'Answer "yes" if the number is even, otherwise answer "no".';
    $gameLogic = "App\Games\BrainEven\brainEven";
    runGame($tutorial, $gameLogic);
}

function brainEven()
{
    $question = rand(MIN_NUMBER, MAX_NUMBER);
    $correctAnswer = $question % 2 === 0 ? 'yes' : 'no';
    return [$question, $correctAnswer];
}
