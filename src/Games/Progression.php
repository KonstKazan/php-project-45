<?php

namespace App\Games\BrainProgression;

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
    $gameLogic = "App\Games\BrainProgression\brainProgression";
    runGame($tutorial, $gameLogic);
}

function BrainProgression()
{
    $numStart = rand(PROGRESSION_MIN_NUMBER, PROGRESSION_MAX_NUMBER);
    $step = rand(PROGRESSION_MIN_STEP, PROGRESSION_MAX_STEP);
    $arr = [];
    $length = rand(PROGRESSION_MIN_LENGTH, PROGRESSION_MAX_LENGTH);
    $numEnd = $numStart + $step * $length;
    $arr = range($numStart, $numEnd, $step);
    $mark = rand(0, count($arr) - 1);
    $correctAnswer = (string)$arr[$mark];
    $arr[$mark] = "..";
    $question = implode(" ", $arr);
    return [$question, $correctAnswer];
}
