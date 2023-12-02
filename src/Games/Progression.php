<?php

namespace App\Games\BrainProgression;

define("NUM_RAND_BEGIN_PROG", 1);
define("NUM_RAND_END_PROG", 40);
define("INC_RAND_BEGIN_PROG", 1);
define("INC_RAND_END_PROG", 5);
define("LEN_RAND_BEGIN_PROG", 5);
define("LEN_RAND_END_PROG", 10);

function BrainProgression()
{
    $numStart = rand(NUM_RAND_BEGIN_PROG, NUM_RAND_END_PROG);
    $increment = rand(INC_RAND_BEGIN_PROG, INC_RAND_END_PROG);
    $arr = [];
    $lenght = rand(LEN_RAND_BEGIN_PROG, LEN_RAND_END_PROG);
    for ($i = 1; $i <= $lenght; $i++) {
        $arr[] = $numStart += $increment;
    }
    $mark = rand(1, $lenght - 1);
    $correctAnswer = $arr[$mark];
    $arr[$mark] = "..";
    $question = implode(" ", $arr);
    return [$question, $correctAnswer];
}
