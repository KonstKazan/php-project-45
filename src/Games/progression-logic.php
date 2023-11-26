<?php

namespace Php\Project\BrainProgression;

function BrainProgression()
{
    $numStart = rand(1, 40);
    $increment = rand(1, 5);
    $arr = [];
    $lenght = rand(5, 10);
    for ($i = 1; $i <= $lenght; $i++) {
        $arr[] = $numStart += $increment;
    }
    $mark = rand(1, $lenght - 1);
    $correctAnswer = $arr[$mark];
    $arr[$mark] = "..";
    $question = implode(" ", $arr);
    return [$question, $correctAnswer];
}
