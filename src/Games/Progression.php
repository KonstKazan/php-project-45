<?php

namespace App\Games\BrainProgression;

function BrainProgression()
{
    define("NUM_RAND_BEGIN", 1);
    define("NUM_RAND_END", 40);
    define("INC_RAND_BEGIN", 1);
    define("INC_RAND_END", 5);
    define("LEN_RAND_BEGIN", 5);
    define("LEN_RAND_END", 10);
    $numStart = rand(NUM_RAND_BEGIN, NUM_RAND_END);
    $increment = rand(INC_RAND_BEGIN, INC_RAND_END);
    $arr = [];
    $lenght = rand(LEN_RAND_BEGIN, LEN_RAND_END);
    for ($i = 1; $i <= $lenght; $i++) {
        $arr[] = $numStart += $increment;
    }
    $mark = rand(1, $lenght - 1);
    $correctAnswer = $arr[$mark];
    $arr[$mark] = "..";
    $question = implode(" ", $arr);
    return [$question, $correctAnswer];
}
