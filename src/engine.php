<?php

namespace Php\Project\Engine;

use function cli\line;
use function cli\prompt;

function greetings()
{
    global $name;
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}

function tutorial($description)
{
    line($description);
}

function round($question)
{
    line("Question: $question");
    $answer = prompt('Your answer: ');
    return $answer;
}

function correct()
{
    line('Correct!');
}

function wrong($wrong)
{
    global $name;
    line($wrong);
    line("Let's try again, {$name}!");
}

function congratulations()
{
    global $name;
    line("Congratulations, {$name}!");
}
