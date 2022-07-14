#!/usr/bin/php
<?php

function is_op($str)
{
    $line = "m+-*/%";
    if (strlen($str) == 1 && stripos($line, $str) > 0)
        return 1;
    return -1;
}

if ($argc == 4)
{
    $op = trim($argv[2]);
    if (!is_numeric($argv[1])  || !is_numeric($argv[3]) || is_op($op) == -1)
    {
        echo "Incorrect Parameters";
        exit();
    }
    $a1 = (float)$argv[1];
    $a2 = (float)$argv[3];
    switch ($op)
    {
        case "+":
            $r = $a1 + $a2;
            echo $r;
            break;
        case "-":
            $r = $a1 - $a2;
            echo $r;
            break;
        case "*":
            $r = $a1 * $a2;
            echo $r;
            break;
        case "/":
            $r = $a1 / $a2;
            echo $r;
            break;
        case "%":
            $r = $a1 % $a2;
            echo $r;
            break; 
    }

}
else 
    echo "Incorrect Parameters";
?>