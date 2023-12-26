<?php

namespace App\Games\Progression;

use function App\Engine\runGame;

const PROGRESSION_MIN_NUMBER = 1;
const PROGRESSION_MAX_NUMBER = 40;
const PROGRESSION_MIN_STEP = 1;
const PROGRESSION_MAX_STEP = 5;
const PROGRESSION_MIN_LENGTH = 5;
const PROGRESSION_MAX_LENGTH = 10;

function runBrainProgression()
{
    $tutorial = 'What number is missing in the progression?';
    $gameLogic = "App\Games\Progression\brainProgression";
    runGame($tutorial, $gameLogic);
}

function createProgression(int $numStart, int $step, int $length)
{
    $numEnd = $numStart + $step * $length;
    return range($numStart, $numEnd, $step);
}

function brainProgression()
{
    $numStart = rand(PROGRESSION_MIN_NUMBER, PROGRESSION_MAX_NUMBER);
    $step = rand(PROGRESSION_MIN_STEP, PROGRESSION_MAX_STEP);
    $length = rand(PROGRESSION_MIN_LENGTH, PROGRESSION_MAX_LENGTH);
    $progression = createProgression($numStart, $step, $length);
    $mark = rand(0, count($progression) - 1);
    $correctAnswer = (string)$progression[$mark];
    $progression[$mark] = "..";
    $question = implode(" ", $progression);
    return [$question, $correctAnswer];
}
