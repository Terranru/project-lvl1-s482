<?php
namespace BrainGames\Evenlib;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $random = random_int(0, 15);
    line("Question: %s", $random);
    $answer = prompt('Your answer');
    
    return;
}
