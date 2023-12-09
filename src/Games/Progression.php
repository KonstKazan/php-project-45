<?php

namespace App\Games\BrainProgression;

const NUM_RAND_BEGIN_PROG = 1;
const NUM_RAND_END_PROG = 40;
const INC_RAND_BEGIN_PROG = 1;
const INC_RAND_END_PROG = 5;
const LEN_RAND_BEGIN_PROG = 5;
const LEN_RAND_END_PROG = 10;

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
