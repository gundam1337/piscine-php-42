#!/usr/bin/php
<?php

    if ($argc != 2)
        return (0);
    $array = file('php://stdin');
    unset($array[0]);

    $count = 0;
    $notes = 0;


    if ($argv[1] == "average")
    {
        foreach ($array as $value)
        {
            $temp = explode(";", $value);
            if ($temp[1] != '' && $temp[2] != "moulinette")
            {
                $notes += $temp[1];
                $count++;
            }
        }
        echo $notes / $count . "\n";
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>