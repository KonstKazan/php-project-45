<?php

namespace App\Games\BrainEven;

define("NUM_RAND_BEGIN_EVEN", 1);
define("NUM_RAND_END_EVEN", 100);

function brainEven()
{
    $question = rand(NUM_RAND_BEGIN_EVEN, NUM_RAND_END_EVEN);
    $correctAnswer = $question % 2 === 0 ? 'yes' : 'no';
    return [$question, $correctAnswer];
}
