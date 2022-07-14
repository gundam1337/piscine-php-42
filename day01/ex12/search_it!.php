#!/usr/bin/php
<?php

if ($argc >1)
{
    $i = 0;
    
    $search = $argv[1].":";
    //echo $search . "\n";
    foreach( array_reverse($argv) as $key=>$value)
    {
        if ($key == array_key_last($argv))
           break;
        if ($array = strstr($value, $search))
        {
            //echo $array . "\n";
            $array = explode(":", $array);
            echo $array[1] . "\n";
            break;
        } 
    }
}



   //  strstr("toto:42", "toto:");


?>