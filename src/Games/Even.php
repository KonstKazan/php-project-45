<?php

namespace App\Games\BrainEven;

function brainEven()
{
    define("NUM_RAND_BEGIN", 1);
    define("NUM_RAND_END", 100);
    $question = rand(NUM_RAND_BEGIN, NUM_RAND_END);
    $correctAnswer = $question % 2 === 0 ? 'yes' : 'no';
    return [$question, $correctAnswer];
}
