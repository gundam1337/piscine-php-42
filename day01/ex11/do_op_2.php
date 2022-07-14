#!/usr/bin/php
<?php


if ($argc == 2)
{
    $temp = preg_split("/ +/",trim($argv[1]));
    $str = implode("",$temp);
    $values = preg_split("#[*+-.%/]#",$str);
    if (is_numeric($values[0]) && is_numeric($values[1]))
    {
        $op = preg_split("(\d+)",$str);
        $a1 = (float)$values[0];
        $a2 = (float)$values[1];
        switch ($op[1])
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
        echo "Syntax Error";
     
}
?>