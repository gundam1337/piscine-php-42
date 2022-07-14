#!/usr/bin/php
<?php

if ($argc == 2)
{
    $array = preg_split("/ +/",trim($argv[1]));
    foreach($array as $key =>$value)
    {
        if ($key == array_key_last($array))
        {
            echo $value;
            break;
        }
            
        echo $value. " ";
    }
}
?>