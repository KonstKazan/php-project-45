<?php

namespace App\Games\BrainEven;

use function App\Engine\runGame;

const NUM_RAND_BEGIN_EVEN = 1;
const NUM_RAND_END_EVEN = 100;

function runBrainEven()
{
    $tutorial = 'Answer "yes" if the number is even, otherwise answer "no".';
    $gameLogic = "App\Games\BrainEven\brainEven";
    runGame($tutorial, $gameLogic);
}

function brainEven()
{
    $question = rand(NUM_RAND_BEGIN_EVEN, NUM_RAND_END_EVEN);
    $correctAnswer = $question % 2 === 0 ? 'yes' : 'no';
    return [$question, $correctAnswer];
}
