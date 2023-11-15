<?php

$var2 = 2;
$var3 = 5;

function calculator($first, $last, $operator)
{

    switch ($operator) {
        case $operator == "/":
            echo $first / $last;
            break;
        case $operator == "+":
            echo $first + $last;
            break;
        case $operator == "-":
            echo $first - $last;
            break;
        case $operator == "*":
            echo $first * $last;
            break;
        case $operator == "%":
            echo $first % $last;
            break;
    }
}

$var = "+";
calculator($var2, $var3, $var);
